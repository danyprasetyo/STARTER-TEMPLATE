<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\BooksExport;
use App\Imports\BooksImport;
use PDF;

class AdminController extends Controller
{
   public function __construct()
   {
    $this->middleware('auth');
   }
   public function index()
   {
    $user = Auth::user();
    return view('home', compact('user'));
   }
   public function books()
   {
      $user = Auth::user();
      $books = Book::all();
      return view('book', compact('user', 'books'));
   }
//insert
public function submit_book(Request $req)
{
    $validate = $req->validate([
        'judul' => 'required|max:255',
        'penulis' => 'required',
        'tahun' => 'required',
        'penerbit' => 'required',
        'cover' => 'file|mimes:jpg,jpeg,png,bmp',

    ]);

    $book = new Book;

    $book->judul = $req->get('judul');
    $book->penulis = $req->get('penulis');
    $book->tahun = $req->get('tahun');
    $book->penerbit = $req->get('penerbit');

    if ($req->hasFile('cover')) {
        $extension = $req->file('cover')->extension();
        $filename = 'cover_buku' . time() . '.' . $extension;
        $req->file('cover')->storeAs(
            'public/cover_buku',
            $filename
        );
        $book->cover = $filename;
    }

    $book->save();

    $notification = [
        [
            'massage' => 'Data buku berhasil ditambahkan.',
            'alert-type' => 'success'

        ]

    ];
    return redirect()->route('admin.books')->with($notification);
}
//AJAX PROCESS
public function getDataBuku($id){
    $buku = Book::find($id);

    return response()->json($buku);
}
//update
public function update_book(Request $req)
{
    $book = Book::find($req->get('id'));
    $validate = $req->validate([
        'judul' => 'required|max:255',
        'penulis' => 'required',
        'tahun' => 'required',
        'penerbit' => 'required',
        'cover' => 'file|mimes:jpg,jpeg,png,bmp'

    ]);



    $book->judul = $req->get('judul');
    $book->penulis = $req->get('penulis');
    $book->tahun = $req->get('tahun');
    $book->penerbit = $req->get('penerbit');

    if ($req->hasFile('cover')) {
        $extension = $req->file('cover')->extension();
        $filename = 'cover_buku' . time() . '.' . $extension;
        $req->file('cover')->storeAs(
            'public/cover_buku',
            $filename
        );

        Storage::delete('public/cover_buku/' . $req->get('old_cover'));
        $book->cover = $filename;
    }

    $book->save();

    $notification = [
        [
            'massage' => 'Data Berhasil diUpdate.',
            'alert-type' => 'success'

        ]

    ];
    return redirect()->route('admin.books')->with($notification);
}
public function delete_book($id)
{

    $book = Book::find($id);

    Storage::delete('public/cover_buku/' . $book->cover);

    $book->delete();

    $success = true;

    $message = "Data Buku Berhasil dihapusz";

    return response()->json([
        'success' => $success,
        'message' => $message,
    ]);
}
//print pdf
public function print_books()
{
    $books = Book::all();

    view()->share('print_books', $books);

    $pdf = Pdf::loadview('print_books', [
        'books' => $books
    ]);
    return $pdf->download('data_buku.pdf');
}
//export
public function export(){
    return Excel::download(new BooksExport, 'books.xlsx');
}
//import
public function import(Request $req)
{
    Excel::import(new BooksImport, $req->file('file'));
    $notification = array(
        'message' => 'Import data berhasil dilakukan',
        'alert-type' => 'success'
    );
    return redirect()->route('admin.books')->with($notification);
}


}
