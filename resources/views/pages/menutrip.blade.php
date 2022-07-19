@extends('layouts.app')
@section('tittle')
Menu Trip
@endsection
@section('content')
<!--Filter Paket Trip-->
<div class="container d-flex justify-content-center ">
    <div class="filter-paket-trip">
        <h3>Choose Your Date For Your Adventure</h3>
        <form action=" {{route('menutrip')}} " method="GET">
            <div class="row mt-4">
            <div class="col-sm mt-4">
                <h6 for="tgl_bulan_dari">From Date</h6>
                <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr" id="tgl_bulan_dr">
            </div>
            <div class="col mt-4">
                <h6 for="tgl_bulan_sampai">To Date</h6>
                <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_sd" id="tgl_bulan_sd">
            </div>
            <div class="col mt-4">
                <button type="submit" class="btn btn-success mt-4">Cari</button>
            </div>
            </div>
        </form>
    </div>
    </div>
    <!--Tutup Filter Paket Trip-->

    <!-- menutrip -->
    <div class="container menu-trip">
        <h3 class="title-menu text-center">Explore The World With Jejak Adventure</h3>
        <div class="row col-sm-justify-content-center">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-4 my-4">
                <a href="{{route('detailpage',$item->slug)}}">
                    <div class="card-travel mx-auto d-flex flex-column"
                    style=" background : url(' {{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''}}');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;">
                        <div class="text-card mt-auto mb">
                            <div class="travel-price">  Rp. 
                                @php
                                echo number_format("$item->price")."<br>";
                                @endphp </div>
                            <div class="travel-days mt-2">{{ \Carbon\Carbon::create($item->departure_date)->format('F d,Y') }}</div>
                        </div>
                    </div>
                </a>
                <div class="text-trip ml-3">
                    <h3 style="font-weight: bold;">{{$item->title}}</h3>
                    <p> {{$item->username}} </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- tutupmenutrip -->
@endsection

