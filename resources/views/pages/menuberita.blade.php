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
                @foreach ($news as $item)
                <a href=" {{route('detailberita',$item->id)}} ">
                    <div class="row justify-content-center">
                        <div class="col-lg-10 pl-lg-0">
                            <div class="row">
                                <div class="col border-right text-center">
                                <img src="{{$item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : ''}}" width="500" alt="">
                                </div>
                                <div class="col-lg-4">
                                    <p class="travel-days mt-2">{{ \Carbon\Carbon::create($item->date)->format('F n,Y') }}</p><br>
                                <h1>{{$item->title}}</h1>
                                <p> {{$item->subtitle}} </p>
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

        <div class="container menu-berita">
        <div class="row">
            @foreach ($items as $item) 
            <div class="col-sm-6 col-md-4 col-lg-4 my-4">
                <a href="{{route('detailberita',$item->id)}}">
                    <div class="card-berita mx-auto d-flex flex-column">
                        <div class="images-berita mx-auto">
                            <img src="{{$item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : 'frontend/images/berita-bromo.png'}}" alt="">
                        </div>
                        <div class="text-trip ml-3">
                            <p class="travel-days mt-2">{{ \Carbon\Carbon::create($item->date)->format('M d,Y') }}</p><br>
                            <h3 style="font-weight: bold;"> {{$item->title}} </h3>
                            <p> {{$item->subtitle}} </p>                            
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