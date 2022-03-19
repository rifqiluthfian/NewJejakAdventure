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
                  Trip
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
              <h1 class="ml-5 mt-3">Gunung Bromo</h1>
              <p class="ml-5 ">
                Tiga Dewa Adventure
              </p>
              <div class="gallery mx-auto">
                <div class="xzoom-container">
                  <img src="{{url('/frontend/images/Bromo 3 3.png')}}" class="xzoom" id="xzoom-default"
                  x-original="{{url('/frontend/images/Bromo 3 3.png')}}" width="550">
                </div>
                <div class="xzoom-thumbs">
                  <a href="{{url('/frontend/images/Bromo 1 5.png')}}">
                    <img src="{{url('/frontend/images/Bromo 1 5.png')}}" 
                    class="xzoom-gallery" 
                    width="128" 
                    xpreview="{{url('/frontend/images/Bromo 1 5.png')}}">
                  </a>
                  <a href="{{url('/frontend/images/Bromo 2 2.png')}}">
                    <img src="{{url('/frontend/images/Bromo 2 2.png')}}" 
                    class="xzoom-gallery" 
                    width="128" 
                    xpreview="{{url('/frontend/images/Bromo 2 2.png')}}">
                  </a>
                  <a href="{{url('/frontend/images/Bromo 4 2.png')}}">
                    <img src="{{url('/frontend/images/Bromo 4 2.png')}}" 
                    class="xzoom-gallery" 
                    width="128" 
                    xpreview="{{url('/frontend/images/Bromo 4 2.png')}}">
                  </a>
                  <a href="{{url('/frontend/images/Bromo 4 3.png')}}">
                    <img src="{{url('/frontend/images/Bromo 4 3.png')}}" 
                    class="xzoom-gallery" 
                    width="128" 
                    xpreview="{{url('/frontend/images/Bromo 4 3.png')}}">
                  </a>
                </div>
              </div>
              <h4 class="ml-5">Itinary Trip</h4 >
              <p class="mx-5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the 
                leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s 
                with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop 
                publishing software like Aldus PageMaker including versions of Lorem Ipsum
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card card-details-right card-right">
                <h3>Detail pemesanan</h3>     

              <hr>
              <h4>Informasi trip</h4>
              <table class="trip-information">
                <tr>
                  <th width="50%">Jadwal Trip</th>
                  <td width="50%" class="text-right">12 Maret 2022</td>
                </tr>
                <tr>
                  <th width="50%">Durasi Trip</th>
                  <td width="50%" class="text-right">3H2D</td>
                </tr>
                <tr>
                  <th width="50%">Price</th>
                  <td width="50%" class="text-right">Rp.400.000</td>
                </tr>
              </table>
            </div>
            <div class="join-container">
              <a href="{{url('/checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
              </a>
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
