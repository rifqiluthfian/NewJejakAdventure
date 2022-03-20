<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jejak Adventure</title>
    <link rel="stylesheet" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <link rel="icon" href="{{url('frontend/images/logo-tab.png')}}">
</head>
<body>
  <section class="atas">
        <!-- Navbar -->
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-trasnparent">
                <a class="navbar-brand" href="{{route('home')}}">
                    <img src="frontend/images/logo.png" width="200" alt="">
                </a>

                <button class="navbar-toggler navbar-toggler-right" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarNav" 
                aria-controls="navbarNav">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('menutrip')}}">Trip</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('berita')}}">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                        @guest
                         <!--Button Mobile-->
                        <form class="form-inline d-sm-block d-md-block d-lg-none">
                            <button class="btn btn-login my-2 my-sm-0" type="button" onclick="event.preventDefault();
                            location.href='{{url('login')}}';">
                                Login
                            </button>
                        </form>
                        <!--Button Desktop-->
                        <form class="form-inline my-lg-0 d-none d-lg-block">
                            <button class="btn btn-login btn-navbar-right my-sm-0 px-4" type="button" onclick="event.preventDefault();
                            location.href='{{url('login')}}';">
                                Login
                            </button>
                        </form>
                        @endguest

                        @auth
                        <!--Button Mobile-->
                        <form class="form-inline d-sm-block d-md-block d-lg-none" action="{{url('logout')}}" method="POST">
                          @csrf
                            <button class="btn btn-login my-2 my-sm-0" type="submit">
                                Logout
                            </button>
                        </form>
                        <!--Button Desktop-->
                        <form class="form-inline my-lg-0 d-none d-lg-block" action="{{url('logout')}}" method="POST">
                          @csrf
                            <button class="btn btn-login btn-navbar-right my-sm-0 px-4" type="submit">
                                Logout
                            </button>
                        </form>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
        <!--Tutup Navbar -->
       
        <!-- Header -->
        <Header class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col text-header">
                        Let’s explore all Wonderfull Indonesia Destination.
                    </div>
                    <div class="col-md-5 book-trip">
                        <h3 class="text-center mt-4">Book Trip</h3>
                            <form action="#" method="GET">
                                <div class="row">
                                    <div class="col">
                                        <h6 for="tgl_bulan_dari">Dari Tanggal</h6>
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr" id="tgl_bulan_dr">
                                    </div>
                                    <div class="col">
                                        <h6 for="tgl_bulan_sampai">Sampai Tanggal</h6>
                                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr" id="tgl_bulan_dr">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mt-4">
                                        <label for="Destination">Destination</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                                </svg>
                                                </span>
                                            </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-center">
                                        <button class="btn btn-filter bg-light my-4 " type="submit">Search</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </Header>
        <!--Tutup Header -->
  </section>

        <!-- main content -->
        <main class="container-fluid main-content">
            <div class="main-text text-center">
                <h1>Popular Destination</h1>
                <h5 class="mt-4">Make your wondrous</h5>
                <h5>experience with us</h5>
            </div>
        </main>
        <!-- Tutup main content -->

        <!-- popular-trip -->
        <div class="container popular-trip">
            <div class="section-popular-trip row justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{route('detailpage')}}">
                    <div class="card-travel mx-auto d-flex flex-column">
                        <div class="text-card mt-auto mb">
                            <div class="travel-price">Rp.1.200.000</div>
                            <div class="travel-days mt-2">3D2N</div>
                        </div>
                    </div>
                  </a>
                    <div class="text-trip ml-3">
                        <h3 style="font-weight: bold;">Pulau Komodo</h3>
                        <p>jejakdewaadventure</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{route('detailpage')}}">
                    <div class="card-travel mx-auto d-flex flex-column">
                        <div class="text-card mt-auto mb">
                            <div class="travel-price">Rp.1.200.000</div>
                            <div class="travel-days mt-2">3D2N</div>
                        </div>
                    </div>
                  </a>
                    <div class="text-trip ml-3">
                        <h3 style="font-weight: bold;">Pulau Komodo</h3>
                        <p>jejakdewaadventure</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="{{route('detailpage')}}">
                    <div class="card-travel mx-auto d-flex flex-column">
                        <div class="text-card mt-auto mb">
                            <div class="travel-price">Rp.1.200.000</div>
                            <div class="travel-days mt-2">3D2N</div>
                        </div>
                    </div>
                  </a>
                    <div class="text-trip ml-3">
                        <h3 style="font-weight: bold;">Pulau Komodo</h3>
                        <p>jejakdewaadventure</p>
                    </div>
                </div>

            </div>
        </div>
        <!--Tutup popular-trip -->

        <!-- news-content -->
        <div class="container berita">
            <h1>Berita Terbaru</h1>
            <div class="section-berita row">
                <div class="col-md-4 mt-4">
                    <div class="card-news mx-auto d-flex flex-column">
                        <img src="frontend/images/berita-1.png" class="p-3" alt="">
                        <p class="judul-berita m-3">Status Semeru Meningkat, Jarak 13 Km dari Puncak Wajib </p>
                        <p class="sumber-berita m-3">Solopos.com, LUMAJANG</p>
                        <p class="mx-3">Peningkatan status Gunung Semeru dari 
                            level II (waspada) menjadi level III (siaga) perlu
                             menjadi perhatian...</p>
                    </div>
                </div>
                <div class="col-md-4 mt-4">
                    <div class="card-news mx-auto d-flex flex-column">
                        <img src="frontend/images/berita-1.png" class="p-3" alt="">
                        <p class="judul-berita m-3">Status Semeru Meningkat, Jarak 13 Km dari Puncak Wajib </p>
                        <p class="sumber-berita m-3">Solopos.com, LUMAJANG</p>
                        <p class="mx-3">Peningkatan status Gunung Semeru dari 
                            level II (waspada) menjadi level III (siaga) perlu
                             menjadi perhatian...</p>
                    </div>
                </div>
                <div class="col-md-4 mx-auto mt-4">
                    <div class="card-news d-flex flex-column">
                        <img src="frontend/images/berita-1.png" class="p-3" alt="">
                        <p class="judul-berita m-3">Status Semeru Meningkat, Jarak 13 Km dari Puncak Wajib </p>
                        <p class="sumber-berita m-3">Solopos.com, LUMAJANG</p>
                        <p class="mx-3">Peningkatan status Gunung Semeru dari 
                            level II (waspada) menjadi level III (siaga) perlu
                             menjadi perhatian...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- tutup news-content -->



        <!-- Footer -->
  <footer class="text-center text-lg-start text-muted content-footer">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="mr-4 text-reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
          </svg>
        </a>
        <a href="" class="mr-4 text-reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
          </svg>
        </a>
        <a href="" class="mr-4 text-reset">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
          </svg>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase mb-4">
              Tentang Jejak Adventure
            </h6>
            <p class="text-left">
              Jejak Adventure menawarkan jasa pelayanan untuk travel gunung di Indonesia maupun internasional, dengan jasa pelayanan yang pastinya bersertifikasi dan terpercaya.
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">About us</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact Us
            </h6>
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
              info@Jejakadventure.com
            </p>
            <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></i>+62 85608537600</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Jejakadventure.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <script src="{{url('frontend/libraries/jquery/jquery-3.4.1.min.js')}}"></script>
  <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>
  <script src="{{url('frontend/libraries/retina/retina.min.js')}}"></script>
</body>
</html>