@extends('layouts.travelagent')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Detail Transaction {{$item->user->name}}
            </h1>
        </div>
    </div>


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

@endsection
