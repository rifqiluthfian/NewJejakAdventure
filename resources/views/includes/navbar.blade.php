<!-- Navbar -->
    <main>
        <section class="menu-trip-header">
<!-- Navbar -->
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-trasnparent navbar-css">
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
            <ul class="navbar-nav p-3">
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
                    <a class="nav-link" href=" {{route('gallery')}} ">Gallery</a>
                </li>
                @guest
                <li class="nav-item bg-dark" style="width : 20%;">
                    <a class="nav-link text-center" href="{{url('login')}}">Login</a>
                </li>
  
                <li class="nav-item bg-light" style="width : 20%;">
                  <a class="nav-link text-center" style="color: black !important" href="{{url('register')}}">Register</a>
              </li>
                @endguest
                
                <li class="nav-item dropdown">
                  @auth
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{Auth::user()->username}} " height="35" 
                    class="rounded-circle" alt="">
                  </a>
                  @endauth
                  
                  <div class="dropdown-menu" style="font-size: 13px" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href=" {{route('profile')}} ">Profile</a>
                    <a class="dropdown-item" href=" {{route('statustransaction.index')}} ">Status Payment</a>
                    @if (!Auth::guest() && Auth::user()->roles == 'TRAVELAGENT')
                    <a class="dropdown-item" href="{{route('travelagent')}}">Travel Agent</a>
                    @else
                    <a class="dropdown-item" href=" {{route('registerta')}} " class="btn btn-success">Wants become Travel Agent?</a>
                    <a class="dropdown-item" href=" {{route('registerta.status')}} " class="btn btn-success">Status Register Travel Agent</a>
                    @endif
                    <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Privacy Policy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        Body Privacy Policy
        </div>
        <div class="checkbox">
            <form action='http://webisite.com' class="mx-4" method='post' onSubmit="return false;">
                <p>
                 <span style="text-align: center">
                 <input type ="checkbox" name="agree" value="anything">
                I Agree To And Understand The Charges That Will Be Processed To My Credit Card</span></p>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href=" {{route('registerta')}} " class="btn btn-success">Save changes</a>
        </div>
    </div>
    </div>
</div>
<!-- Button trigger modal -->