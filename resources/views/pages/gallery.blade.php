@extends('layouts.app')
@section('title')
Gallery Jejak Adventure
@endsection
@section('content')
    <!-- detailheader -->
    <main class="details-header">
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb ">
                                <li class="breadcrumb-item-berita active">
                                    Gallery
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center gallery-body">
                    <div class="container-fluid">
                        <h2 class="text-center my-4">Gallery Of Jejak Adventure</h2>
                        <div class="row">
                            <div class="col">
                                <div class="year">
                                    <h2 class="text-center my-4">2022</h2>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            @foreach ($items as $item)
                            <div class="col-sm-12 col-md-6 col-lg-6 container-gallery">
                                <div class="card-gallery">
                                    <figure class="card__thumb">
                                        <div class="center-crop">
                                            <img src="{{ Storage::url( $item->image) }}" width="800" alt="" class="card__image"> 
                                        </div>
                                        <figcaption class="card__caption">
                                            <h2 class="card__title text-white"> {{$item->title}} </h2>
                                            <p class="card__snippet">{{$item->description}}</p>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                 
                    </div>
                </div>
            </div>
        </section>

       
    </main>
        <!-- tutupdetailheader -->

   
@endsection