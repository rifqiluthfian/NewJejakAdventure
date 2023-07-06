<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jejak Adventure</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/styles/main.css') }}">
    <link rel="icon" href="{{ url('frontend/images/logo-tab.png') }}">

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
</head>

<body>
    <section class="atas">
        @include('pages.extras.header')

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
                @endif
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
            </div>
        </div>
        <!-- Header -->
        <Header class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col text-header">
                        Let’s explore all Wonderfull Indonesia Destination.
                    </div>
                    <div class="col-md-5 book-trip">
                        <h3 class="text-center mt-4">Book Trip</h3>
                        <i class="fas fa-bar"></i>
                        <form action=" {{ route('menutrip') }} " method="GET">
                            <div class="row">
                                <div class="col">
                                    <h6 for="tgl_bulan_dari">From date</h6>
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_dr"
                                        id="tgl_bulan_dr">
                                </div>
                                <div class="col">
                                    <h6 for="tgl_bulan_sampai">Until date</h6>
                                    <input type="date" class="form-control" placeholder="Tanggal" name="tgl_bulan_sd"
                                        id="tgl_bulan_dr">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 mt-4">
                                    <label for="Destination">Destination</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text p-3" id="basic-addon1"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                                </svg>
                                            </span>
                                        </div>
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Destination" aria-label="title"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <button class="btn btn-filter my-4 searchBtn" type="submit">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </Header>
        <!--Tutup Header -->
    </section>

    <!-- main content -->
    <main class="container-fluid main-content">
        <div class="main-text text-center">
            <h1>Popular Destination</h1>
            <h5 class="mt-4">Make your wondrous</h5>
            <h5>experience with us</h5>
        </div>
    </main>

    <!-- Tutup main content -->

    <!-- popular-trip -->
    <div class="container popular-trip">
        <div class="section-popular-trip row justify-content-center">
            @foreach ($items as $item)
                <div class="p-0 px-2 col-sm-6 col-md-6 col-lg-3">
                    <a href="{{ route('detailpage', $item->slug) }}">
                        <div class="pt-3 pt-lg-3 p-1 mb-3 mb-lg-0 wrapper-card bg-light">
                            <div class="card-travel mx-auto d-flex flex-column"
                                style="background : url(' {{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center;">
                                <div class="text-card mt-auto mb">
                                    <div class="travel-price">Rp.
                                        @php
                                            echo number_format("$item->price") . '<br>';
                                        @endphp</div>
                                    <div class="travel-days mt-2">
                                        {{ \Carbon\Carbon::create($item->departure_date)->format('F d,Y') }}</div>
                                </div>
                            </div>
                            <div class="text-trip ml-3 mb-3">
                                <!-- <a href="{{ route('detailpage', $item->slug) }}"> -->
                                <h3 style="font-weight: bold;"> {{ $item->title }} </h3>
                                <p> {{ $item->travelagent_name }} </p>
                                <span class="badge border border-warning text-dark">
                                    {{ $item->averageRating }}
                                    <i class="fa fa-star text-warning"></i>
                                </span>
                                <!-- </a> -->
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    <!--Tutup popular-trip -->

    <!-- news-content -->
    <div class="container berita">
        <h1>News Update</h1>
        <div class="section-berita row">
            @foreach ($news as $item)
                <div class="col-md-4 mt-4">
                    <a href=" {{ route('detailberita', $item->id) }} ">
                        <div class="card-news mx-auto d-flex flex-column">
                            <img src="{{ $item->galleriesnews->count() ? Storage::url($item->galleriesnews->first()->image) : 'frontend/images/berita-bromo.png' }}"
                                alt="">
                            <p class="judul-berita m-3"> {{ $item->title }} </p>
                            <p class="sumber-berita m-3">{{ \Carbon\Carbon::create($item->date)->format('F d,Y') }}
                            </p>
                            <p class="mx-3">{{ $item->subtitle }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    <!-- tutup news-content -->

    <!-- Footer -->
    @include('pages.extras.footer')
    <!-- End Footer -->




    <script src="{{ url('frontend/libraries/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ url('frontend/libraries/jquery/jquery-3.3.1.slim.min.js') }}"></script>
    <!-- <script src="{{ url('frontend/libraries/retina/retina.min.js') }}"></script> -->
    <script src="{{url('frontend/libraries/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/libraries/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </script>

    @auth
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/62973d4db0d10b6f3e751b75/1g4fceube';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })
            ();
        </script>
        <!--End of Tawk.to Script-->
    @endauth

</body>

</html>
