@extends('layouts.app')
@section('title')
Edit Profile
@endsection
@section('content')


<main class="details-header">
  <section class="section-details-content">
    <div class="container">
      <div class="col-sm-d-none p-0">
          <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
            <!-- /Breadcrumb -->
      </div>
    </div>


    <div class="container user-profile">
      <div class="row gutters-sm">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                  <img src="https://ui-avatars.com/api/?name={{$item->name}} " height="150" class="rounded-circle" alt="">
                <div class="mt-3">
                  <h4>{{$item->name}}</h4>
                  <p class="text-secondary mb-1">{{$item->roles}}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-md-8">
          <form action="{{route('profile.update')}}" method="POST">
          @method('put')
          @csrf
          <div class="card mb-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Full Name</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="name" id="name" placeholder="name" value="{{$item->name}}" class="form-control">
                  </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">No identity</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" name="no_identity" id="no_identity" placeholder="noIdentity" value="{{$item->no_identity}}" class="form-control">
                    </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="no_phone" id="no_phone" placeholder="phone" value="{{$item->no_phone}}" class="form-control">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                    <input type="text" name="email" id="email" placeholder="email" value="{{$item->email}}" class="form-control">
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                  </div>
                <div class="row">
                    <div class="col-sm-12">
                      <button type="submit" class="btn btn-success btn-block">Save</button>
                    </div>
                </div>
              </div>
            </div>
          </form>
  
        </div>
      </div>
    </div>
    
  </section>
</main>

@endsection