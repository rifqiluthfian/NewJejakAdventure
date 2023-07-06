@extends('layouts.app')
@section('title')
    Menu Trip
@endsection
@push('prepend-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css">
    <style>
        input.star {
            display: none;
        }

        label.star {
            float: right;
            left: 0;
            font-size: 24px;
            margin: 0px 2px;
            color: #4e4e4e;
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
@endpush
@section('content')
    <div aria-live="polite" aria-atomic="true" class="bg-dark position-relative bd-example-toasts">
        <div class="toast-container position-fixed p-3 top-5 end-0" id="toastPlacement" style="z-index: 999; ">
            @if (session('message'))
                    <div class="toast show ">
                        <div class="toast-header">
                            <strong class="me-auto">Thank's for Your Rating</strong>

                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Don't miss another trip!
                        </div>
                    </div>
                @else
                    @if($notYetRatedByUser)
                        @foreach ($notYetRatedByUser as $item)
                            <div class="toast show ">

                                <div class="toast-header">
                                    <strong class="me-auto">About Your Last Trip</strong>

                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    how was the <span class="fw-bold">{{ $item->travel_package->title }}</span> experience? please give us a rating <br>
                                    <form action="{{ route('rating.put', $item->id) }}" method="POST">
                                        @csrf
                                        <div class="pb-3 flex justify-center px-2 mb-3">
                                            <div class="stars">
                                                <input onchange="this.form.submit()" class="star star-5" id="star-5-{{$item->id}}" type="radio"
                                                    name="star5" />
                                                <label class="star star-5" for="star-5-{{$item->id}}"></label>

                                                <input onchange="this.form.submit()" class="star star-4" id="star-4-{{$item->id}}" type="radio"
                                                    name="star4" />
                                                <label class="star star-4" for="star-4-{{$item->id}}"></label>

                                                <input onchange="this.form.submit()" class="star star-3" id="star-3-{{$item->id}}" type="radio"
                                                    name="star3" />
                                                <label class="star star-3" for="star-3-{{$item->id}}"></label>

                                                <input onchange="this.form.submit()" class="star star-2" id="star-2-{{$item->id}}" type="radio"
                                                    name="star2" />
                                                <label class="star star-2" for="star-2-{{$item->id}}"></label>

                                                <input onchange="this.form.submit()" class="star star-1" id="star-1-{{$item->id}}" type="radio"
                                                    name="star1" />
                                                <label class="star star-1" for="star-1-{{$item->id}}"></label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif
                @endif
        </div>
    </div>

    <!--Filter Paket Trip-->
    <div class="container d-flex justify-content-center ">
        <div class="filter-paket-trip">
            <h3>Choose Your Date For Your Adventure</h3>
            <form action=" {{ route('menutrip') }} " method="GET">
                <div class="row mt-4">
                    <div class="col-sm mt-4">
                        <h6 for="tgl_bulan_dari">From Date</h6>
                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr"
                            id="tgl_bulan_dr">
                    </div>
                    <div class="col mt-4">
                        <h6 for="tgl_bulan_sampai">Until Date</h6>
                        <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_sd"
                            id="tgl_bulan_sd">
                    </div>

                    <div class="col mt-4">
                        <button type="submit" class="btn btn-success mt-4 shadow">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--Tutup Filter Paket Trip-->



    <!-- menutrip -->
    <div class="container menu-trip">
        <h3 class="title-menu text-center">Explore The World With Jejak Adventure</h3>
        <div class="row justify-content-center">
            @foreach ($items as $item)
                <div class="col-sm-6 col-md-6 col-lg-4 my-4">
                    <a href="{{ route('detailpage', $item->slug) }}">
                        <div class="pt-3 pt-lg-3 p-1 mb-3 mb-lg-0 wrapper-card bg-light">
                            <div class="card-travel mx-auto d-flex flex-column"
                                style=" background : url(' {{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;">
                                <div class="text-card mt-auto mb">
                                    <div class="travel-price"> Rp.
                                        @php
                                            echo number_format("$item->price") . '<br>';
                                        @endphp </div>
                                    <div class="travel-days mt-2">
                                        {{ \Carbon\Carbon::create($item->departure_date)->format('F d,Y') }}</div>
                                </div>
                            </div>
                            <div class="text-trip ml-3 mb-3">
                                <h3 style="font-weight: bold;">{{ $item->title }}</h3>
                                <p> {{ $item->travelagent_name }} </p>
                                <span class="badge border border-warning text-dark">
                                    {{ $item->averageRating }}
                                    <i class="fa fa-star text-warning"></i>
                                </span>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- tutupmenutrip -->
@endsection
