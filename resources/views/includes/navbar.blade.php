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

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->username}} " height="35" 
                    class="rounded-circle" alt="">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Contact</a>
                    <a class="dropdown-item" href=" {{route('statustransaction.index')}} ">Status Payment</a>
                    <a class="dropdown-item" href="#">FAQ</a>
                    @guest
                    <a class="dropdown-item" href="{{url('login')}}">Login</a>
                    @endguest
                    
                    @auth
                    <a class="dropdown-item" href="{{url('logout')}}">Logout</a>
                    @endauth
                  </div>
                </li>

                @if (!Auth::guest() && Auth::user()->roles == 'TRAVELAGENT')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('travelagent')}}">Travel Agent</a>
                </li>

                @endif
            </ul>
        </div>
    </nav>
</div>
<!--Tutup Navbar -->
        </section>
        </main>