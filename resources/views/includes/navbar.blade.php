<!-- Navbar -->
    <main>
        <section class="menu-trip-header">
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
                    <ul class="navbar-nav navbar-menu-trip">
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
        </section>
        </main>