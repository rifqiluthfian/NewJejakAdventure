@extends('layouts.app')
@section('tittle')
Menu Berita
@endsection
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
                    <li class="breadcrumb-item-berita active">
                        News
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 pl-lg-0">
                <div class="row">
                    <div class="col border-right text-center">
                    <img src="{{url('frontend/images/berita-bromo.png')}}" width="500" alt="">
                    </div>
                    <div class="col-lg-4">
                    <p>Maret 08 12 2000</p><br>
                    <h1>Wisata Gunung Bromo Telah Dibuka Kembali</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                        an unknown printer took a galley of type and scrambled it to make a type 
                        specimen book.
                        </p>
                    </div>
                </div>
                </div>

            </div>
            </div>
        </section>
        </main>
        <!-- tutupdetailheader -->

        <div class="container menu-berita">
        <div class="row col-sm-justify-content-center">
            <a href="{{url('berita/detailberita')}}">
            <div class="col-sm-6 col-md-4 col-lg-4 my-4">
                <div class="card-berita mx-auto d-flex flex-column">
                <div class="images-berita mx-auto">
                    <img src="{{url('frontend/images/berita-bromo.png')}}" alt="">
                </div>
                <div class="text-trip ml-3">
                    <p>April,09,2000</p>
                    <h3 style="font-weight: bold;">Pulau Komodo</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's 
                    </p>
                </div>
            </div>
            </a>
        </div>
        <a href="{{url('berita/detailberita')}}">
            <div class="col-sm-6 col-md-4 col-lg-4 my-4">
            <div class="card-berita mx-auto d-flex flex-column">
                <div class="images-berita mx-auto">
                <img src="{{url('frontend/images/berita-bromo.png')}}" alt="">
                </div>
                <div class="text-trip ml-3">
                <p>April,09,2000</p>
                <h3 style="font-weight: bold;">Pulau Komodo</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                    Lorem Ipsum has been the industry's 
                    </p>
                </div>
            </div>
        </a>
        </div>
        <a href="{{url('berita/detailberita')}}">
        <div class="col-sm-6 col-md-4 col-lg-4 my-4">
            <div class="card-berita mx-auto d-flex flex-column">
            <div class="images-berita mx-auto">
                <img src="{{url('frontend/images/berita-bromo.png')}}" alt="">
            </div>
            <div class="text-trip ml-3">
                <p>April,09,2000</p>
                <h3 style="font-weight: bold;">Pulau Komodo</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's 
                </p>
            </div>
        </div>
        </a>
    </div>
    <!-- Batas Row -->

            </div>
        </div>
        </div>
        <!-- tutupmenutrip --
@endsection