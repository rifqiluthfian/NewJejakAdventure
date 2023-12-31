@extends('layouts.app')
@section('title')
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
            @foreach ($news as $item)
            <a href=" {{route('detailberita',$item->id)}} ">
                <div class="p-3 mb-3 mb-lg-0 wrapper-card bg-light">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col pl-lg-0">
                            <div class="row">
                                <div class="col border-right my-auto text-center">
                                    <div class="images-berita">
                                        <img src="{{$item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : 'frontend/images/berita-bromo.png'}}" style="width: 100%;" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p class="travel-days mt-2">{{ \Carbon\Carbon::create($item->date)->format('F d,Y') }}</p><br>
                                    <h1>{{$item->title}}</h1>
                                    <p> {{$item->subtitle}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </section>
</main>
<!-- tutupdetailheader -->

<div class="container menu-berita mt-4">
    <div class="row">
        @foreach ($items as $item)
        <div class="col-sm-6 col-md-4 col-lg-4 my-4">
            <a href="{{route('detailberita',$item->id)}}">
                <div class="p-3 mb-3 mb-lg-0 wrapper-card bg-light">
                    <div class="card-berita mx-auto d-flex flex-column">
                        <div class="images-berita mx-auto">
                            <img src="{{$item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : 'frontend/images/berita-bromo.png'}}" width="100%" alt="">
                        </div>
                        <div class="text-trip ml-3">
                            <p class="travel-days mt-2">{{ \Carbon\Carbon::create($item->date)->format('M d,Y') }}</p><br>
                            <h3 style="font-weight: bold;"> {{$item->title}} </h3>
                            <p> {{$item->subtitle}} </p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
<!-- Batas Row -->
</div>
</div>
<!-- tutupmenutrip --
@endsection