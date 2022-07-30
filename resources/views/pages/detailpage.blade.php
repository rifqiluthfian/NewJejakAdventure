@extends('layouts.app')
@section('tittle')
Details Page
@endsection
@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@section('content')
  <!-- detailheader -->
  <main class="details-header">
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-d-none p-0">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{route('menutrip')}}">Trip</a>
                </li>
                <li class="breadcrumb-item active">
                  Detail Trip
                </li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
              <h1 class="ml-5 mt-3"> {{$item->title}} </h1>
              <p class="ml-5 ">
                {{$item->username}}
              </p>

              @if ($item->galleries->count())
              <div class="gallery mx-auto">
                <div class="xzoom-container">
                  <img src=" {{Storage::url($item->galleries->first()->image)}} " class="xzoom" id="xzoom-default"
                  x-original=" {{Storage::url($item->galleries->first()->image)}} " width="550">
                </div>

                <div class="xzoom-thumbs">
                  @foreach ($item->galleries as $gallery)
                    <a href=" {{Storage::url($gallery->image)}} ">
                      <img src="{{Storage::url($gallery->image)}}" 
                      class="xzoom-gallery" 
                      width="128" 
                      xpreview="{{Storage::url($gallery->image)}}">
                    </a>
                  @endforeach
                </div>
              </div>
              @endif
              <div class="about-trip">
                <h4>About trip</h4>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#detail" type="button" role="tab" aria-controls="home" aria-selected="true">Detail trip</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#itinerary" type="button" role="tab" aria-controls="profile" aria-selected="false">Itinerary trip</button>
                  </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="home-tab">{!! $item->about !!}</div>
                  <div class="tab-pane fade" id="itinerary" role="tabpanel" aria-labelledby="profile-tab">{!! $item->itinerary !!}</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details-right card-right">
                <h3>Detail Order</h3>     

              <hr>
              <h4>Information about trip</h4>
              <table class="trip-information">
                <tr>
                  <th width="50%">Schedule Trip</th>
                  <td width="50%" class="text-right">{{ \Carbon\Carbon::create($item->departure_date)->format('F d,Y') }}</td>
                </tr>
                <tr>
                  <th width="50%">Duration Trip</th>
                  <td width="50%" class="text-right">{{$item->duration}}</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">Rp. 
                    @php
                    echo number_format("$item->price")."<br>";
                    @endphp</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              @auth
                <form action=" {{route('checkout.process',$item->id)}} " method="POST">
                  @csrf
                  <button class="btn btn-block btn-join-now mt-3 py-2" type="submit">
                    Join Now
                  </button>
                </form>
              @endauth

              @guest
                <a href="{{route('login')}}" class="btn btn-block btn-join-now mt-3 py-2">
                  Login Or Register To Join
                </a>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- tutupdetailheader -->
@endsection



@push('addon-script')
    <script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
        zoomwidth:400,
        tittle:false,
        tint:'#333',
        xoffset:150
        });
    });
    </script>
@endpush
