@extends('layouts.app')
@section('tittle')
Checkout Page
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
                <li class="breadcrumb-item">
                    Trip
                </li>
                <li class="breadcrumb-item">
                    Detail Trip
                </li>
                <li class="breadcrumb-item active">
                    Checkout
                </li>
                </ol>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="card-body">
                  <table class="table mt-4">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Travel</th>
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
                            <td>{{ $item->travel_package->username }}</td>
                            <td>Rp. 
                                @php
                                echo number_format("$item->transaction_total")."<br>";
                                @endphp
                            </td>
                            <td>{{ $item->transaction_status }}</td>
                            
                            <td>
                                <a href=" {{route('statustransaction.detail',$item->id)}} " class="btn btn-light">
                                    Detail
                                </a>
                            </td>
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
    </section>
    </main>
    <!-- tutupdetailheader -->
@endsection