@extends('layouts.app')
@section('title')
Detail Berita
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
                          Details
                        </li>
                      </ol>
                    </nav>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-10 pl-lg-0">
                    <div class="row mb-5 mt-5">
                      <div class="col border-right my-auto text-center">
                        <img src="{{$item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : ''}}" style="width:100%;" alt="">
                      </div>
                      <div class="col-lg-4">
                        <p>{{ \Carbon\Carbon::create($item->date)->format('F d,Y') }}</p><br>
                        <h1>{{$item->title}}</h1><br>
                      </div>
                    </div>
                  </div>
  
                </div>
              </div>
            </section>
          </main>
          <!-- tutupdetailheader -->
  
          <main class=" px-5 container content-berita">
            <p>
            {!! $item->contents !!}
            </p>
          </main>
  
@endsection