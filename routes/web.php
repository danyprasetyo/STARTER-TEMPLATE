<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\AdminController;
 use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', [AdminController::class, 'index'])->name('admin.home')
->middleware('is_admin');
Route::get('home', [HomeController::class, 'index'])->name('home');



// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

Route::get('admin/books', [AdminController::class, 'books'])
->name('admin.books')
->middleware('is_admin');

Route::post('admin/books', [AdminController::class, 'submit_book'])
->name('admin.book.submit')
->middleware('is_admin');

Route::get('admin/book/update', [AdminController::class, 'update_book'])
->name('admin.book.update')
->middleware('is_admin');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::patch('admin/home/update', [AdminController::class, 'update_book'])->name('admin.book.update')->middleware('is_admin');
Route::get('admin/ajaxadmin/dataBuku{id}', [AdminController::class, 'getDataBuku']);

Route::post('admin/books/delete/{id}', [AdminController::class, 'delete_book'])
->name('admin.book.delete')
->middleware('is_admin');

Route::get('admin/print_books', [AdminController::class, 'print_books'])->name('admin.print.books')->middleware('is_admin');

Route::get('admin/books/export',[AdminController::class, 'export'])
->name('admin.book.export')->middleware('is_admin');

Route::post('admin/books/import',[AdminController::class, 'import'])
->name('admin.book.import')->middleware('is_admin');
