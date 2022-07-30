@extends('layouts.app')
@section('tittle')
User Profile Jejak Adventure
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
          <div class="card mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Full Name</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{$item->name}}
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-sm-3">
                    <h6 class="mb-0">No identity</h6>
                  </div>
                  <div class="col-sm-9 text-secondary">
                      {{$item->no_identity}}
                  </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Phone</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{$item->no_phone}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  {{$item->email}}
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <h6 class="mb-0">Email Verified</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                  @if ($item->email_verified_at == null)
                      <h6 class="mb-0">Not Yet</h6>
                      <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                          @csrf
                          <button type="submit" class="btn btn-success mt-2">{{ __('click here to request verified') }}</button>.
                      </form>
                  @else
                      <h6 class="mb-0">Done</h6>
                  @endif
                </div>
              </div>
              <hr>
              <div class="row">
                  <div class="col-sm-12">
                    <a class="btn btn-success" href="{{route('profile.edit')}}">Edit</a>
                  </div>
                </div>
            </div>
          </div>
        </div>
    </div>
  </section>
</main>

@endsection