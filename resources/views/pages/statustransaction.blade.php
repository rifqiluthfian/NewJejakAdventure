@extends('layouts.app')
@section('title')
Status transaction
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
<!-- detailheader -->
<main class="details-header">
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
        </div>
    </div>
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-d-none p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="card-body table-css overflow-scroll">
                        <table class="table table-responsive-lg table-css mt-4 " id="table_id">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Id</th>
                              <th scope="col">Trip Title</th>
                              <th scope="col">Travel Agent</th>
                              <th scope="col">Total</th>
                              <th scope="col">Status</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              @forelse ($items as $item)
                              <tr>
                                  <td class="text-center">{{$item->id}}</td>
                                  <td>{{ $item->travel_package->title }}</td>
                                  <td>{{ $item->travel_package->travelagent_name }}</td>
                                  <td>Rp.
                                      @php
                                      echo number_format("$item->transaction_total")."<br>";
                                      @endphp
                                  </td>
                                  <td>{{ $item->transaction_status }}</td>

                                  <td>
                                      @if ($item->getAttribute('transaction_status')=='IN_CART')
                                          <a href=" {{route('checkout',$item->id)}} " class="btn btn-success">
                                              Cek
                                          </a>
                                      @else
                                      <a href=" {{route('statustransaction.detail',$item->id)}} " class="border btn btn-light">
                                          Detail
                                      </a>
                                      @endif

                                  </td>
                                  @if ($item->transaction_status=='SUCCESS')
                                    @if ($item->rating > 0)
                                        <td class="text-end">
                                            <div class="pb-3 flex justify-center px-2">
                                                <div class="stars">
                                                    @for ($i = 0; $i < $item->rating; $i++)
                                                        <i class="fa fa-star text-warning"></i>
                                                    @endfor
                                                </div>
                                            </div>
                                        </td>
                                    @else
                                        <td class="text-end" align="left">
                                            <form action="{{ route('rating.put', $item->id) }}" method="POST">
                                                @csrf
                                                <div class="pb-3 flex justify-center px-2 mb-3">
                                                    please give rate
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
                                        </td>
                                    @endif
                                  @endif
                              </tr>
                              @empty
                              <tr>
                                  <td colspan="7" class="text-center">Data Kosong</td>
                              </tr>
                              @endforelse
                          </tbody>
                        </table>
                  </div>
                </div>

            </div>
        </div>
    </section>
    </main>
    <!-- tutupdetailheader -->
@endsection
