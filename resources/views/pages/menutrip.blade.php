@extends('layouts.app')
@section('tittle')
Menu Trip
@endsection
@section('content')
<!--Filter Paket Trip-->
<div class="container d-flex justify-content-center ">
    <div class="filter-paket-trip">
        <h3>Tentukan Agendamu!!!</h3>
        <form action="#" method="GET">
            <div class="row mt-4">
            <div class="col-sm mt-4">
                <h6 for="tgl_bulan_dari">Dari Tanggal</h6>
                <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr" id="tgl_bulan_dr">
            </div>
            <div class="col mt-4">
                <h6 for="tgl_bulan_sampai">Sampai Tanggal</h6>
                <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr" id="tgl_bulan_dr">
            </div>
            <div class="col mt-4">
                <button type="button" class="btn btn-success mt-4">Cari</button>
            </div>
            </div>
        </form>
    </div>
    </div>
    <!--Tutup Filter Paket Trip-->

    <!-- menutrip -->
    <div class="container menu-trip">
    <h3 class="title-menu text-center">Jelajahi Dunia bersama Jejak Adventure</h3>
        <div class="row col-sm-justify-content-center">
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
            <a href="{{route('detailpage')}}">
                <div class="col-sm-6 col-md-4 col-lg-4 my-4">
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
    <!-- tutupmenutrip -->
@endsection
