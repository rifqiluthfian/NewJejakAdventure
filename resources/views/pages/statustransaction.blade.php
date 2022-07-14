@extends('layouts.app')
@section('tittle')
Status transaction of Jejak Adventure
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
                <div class="container">
                    <div class="card-body table-css">
                        <table class="table table-responsive-sm table-css mt-4" id="table_id">
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
                                      @if ($item->getAttribute('transaction_status')=='IN_CART')
                                          <a href=" {{route('checkout',$item->id)}} " class="btn btn-success">
                                              Cek
                                          </a>
                                      @else
                                      <a href=" {{route('statustransaction.detail',$item->id)}} " class="btn btn-light">
                                          Detail
                                      </a>
                                      @endif
                                     
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
        </div>
    </section>
    </main>
    <!-- tutupdetailheader -->
@endsection