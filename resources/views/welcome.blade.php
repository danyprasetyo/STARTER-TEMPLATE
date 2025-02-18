<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tugas Praktikum</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <nav id="navbar-custom" class="navbar navbar-dark navbar-expand-lg fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#page-top">DPF-GARAGE</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#carouselExampleCaptions">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a>
                  </li>
                  @if (Route::has('login'))
                       @auth
                              <li>
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                              </li>
                                @else
                                <li>
                                <a href="{{ route('login') }}"class="nav-link">Log in</a>
                            </li>
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                                    @endif
                            @endauth
                        </div>
                    @endif
                  </div>
                </ul>
              </div>
            </div>
            </div>
          </nav>

          <!-- HOME -->
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('storage/cover_buku/1.jpg') }}" class="d-block w-100" alt="..."/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>DPF-GARAGE</h5>
                  <p>Aplikasi Web Data Buku Perpustakaan</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/cover_buku/2.jpg') }}" class="d-block w-100" alt="..."/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>DPF-GARAGE</h5>
                  <p>Dibuat untuk memenuhi Tugas Besar Praktikum Web Lanjut</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('storage/cover_buku/3.jpg') }}" class="d-block w-100" alt="..."/>
                <div class="carousel-caption d-none d-md-block">
                  <h5>DPF-GARAGE</h5>
                  <p>XIXI.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- About -->
            <section class="min-vh-100 d-flex align-items-center  bg-dark" id="about">
              <div class="container"><br>
                  <h1 class="text-center" style="padding-bottom:30px;">About</h1>
                  <br>

                <div class="row row-cols-2">
                  <div class="col" data-aos="fade-right" data-aos-duration="2000">
                    <h1 class="main-header text-white">
                      DPF-GARAGE
                      <br>
                      <span class="text-warning">Dany Prasetyo Fawzi</span>
                    </h1>
                    <p class="my-4 text-white ">
                      Halo! Saya Dany, saya adalah seorang mahasiswa Universitas Surya Kancana Prodi Teknik Informatika, yang sedang melakuka Tugas Akhir dari Mata Kuliah Praktikum Pemograman Web Lanjut.
                      <br><br>
                    </p>
                    <p class="main-header text-white">Untuk Menggunakan Aplikasi Ini, Silahkan Klik Login.</p>

                    <a class="btn btn-warning btn-lg shadow-lg" href="{{ route('login') }}">Login</a>
                  </div>
                  <div class="col" data-aos="fade-left" data-aos-duration="2000">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="{{ asset('storage/cover_buku/dany.jpg') }}" class="img-responsive" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('storage/cover_buku/dany2.jpg') }}" class="d-block w-100 img-responsive" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="{{ asset('storage/cover_buku/dany.jpg') }}" class="d-block w-100 img-responsive" alt="...">
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </section>


      <!-- contact -->
          <section id="contact">
              <div class="card bg-black  text-center text-white">
                  <div class="card-body">
                  Contact Me
                  <p class="text-warning">
                      Instagram : @danypfw | Email : dpf369@gmail.com
                  </p>
                </div>
                <div class="card-header">
                  Dany Prasetyo Fawzi
                </div>
              </div>
          </section>



          <!-- script -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
          <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
          <script>
              AOS.init();
              let navbar = document.getElementById('navbar-custom');

              window.addEventListener('scroll', function(){
                  let scroll = window.scrollY;

                  if (scroll > 50) {
                      navbar.classList.add('bg-black');
                  } else {
                      navbar.classList.remove('bg-black');
                  }
              })
          </script>
      </body>
      </html>
