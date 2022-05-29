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
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('menutrip')}}">Trip</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('berita')}}">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galley</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @if (!Auth::guest() && Auth::user()->roles == 'TRAVELAGENT')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('travelagent')}}">Travel Agent</a>
                </li>

                @endif
                @guest
                <li class="nav-item bg-dark">
                    <a class="nav-link" href="{{url('login')}}">Login</a>
                </li>
                @endguest
                
                <li class="nav-item dropdown">
                  @auth
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->username}} " height="35" 
                    class="rounded-circle" alt="">
                  </a>
                  @endauth
                  
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href=" {{route('statustransaction.index')}} ">Status Payment</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    @guest
                    <form class="form-inline my-lg-0 d-none d-lg-block">
                        <button class="btn btn-login btn-navbar-right my-sm-0 px-4" type="button" onclick="event.preventDefault();
                        location.href='{{url('login')}}';">
                            Login
                        </button>
                    </form>
                    @endguest

                    @auth
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                          <button class="dropdown-item" type="submit">
                              Logout
                          </button>
                      </form>
                    
                    @endauth
                  </div>
                </li>

                
            </ul>
        </div>
    </nav>
</div>
<!--Tutup Navbar -->
        </section>
        </main>