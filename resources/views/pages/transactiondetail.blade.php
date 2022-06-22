@extends('layouts.app')

@section('content')

@section('tittle')
FaQ
@endsection
@section('content')
    <!-- detailheader -->
    <main class="details-header">
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-d-none p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item-berita active">
                                    Details Transaction
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="container-fluid">
                
                    <div class="card-shadow">
                        <div class="card-body">
                            <table class="table-bordered">
                                <tr>
                                    <td>ID</td>
                                    <td> {{$item->id}} </td>
                                </tr>
                                <tr>
                                    <td>Packet Travel</td>
                                    <td> {{$item->travel_package->title}} </td>
                                </tr>
                                <tr>
                                    <td>Buyer</td>
                                    <td> {{$item->user->name}} </td>
                                </tr>
                                <tr>
                                    <td>Total Transaction</td>
                                    <td> {{$item->transaction_total}} </td>
                                </tr>
                                <tr>
                                    <td>Total Transaction</td>
                                    <td> {{$item->transaction_status}} </td>
                                </tr>
                
                                <tr>
                                    <th>Order</th>
                                    <td>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>ID</td>
                                                <td>Username</td>
                                                <td>No Identify</td>
                                                <td>No Phone</td>
                                            </tr>
                                            @foreach ($item->details as $details)
                                                <td>{{$details->id}}</td>
                                                <td>{{$details->username}}</td>
                                                <td>{{$details->no_identity}}</td>
                                                <td>{{$details->no_phone}}</td>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
        </section>
    </main>
@endsection
