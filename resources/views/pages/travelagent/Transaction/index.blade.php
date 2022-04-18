@extends('layouts.travelagent')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="">Transaction</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <table class="table table-responsive table-hover" id="table_id">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Travel</th>
                                        <th scope="col">users</th>
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
                                        <td>{{ $item->user->name }}</td>
                                        <td>Rp. 
                                            @php
                                            echo number_format("$item->transaction_total")."<br>";
                                            @endphp
                                        </td>
                                        <td>{{ $item->transaction_status }}</td>
                                        
                                        <td>
                                            <a href=" {{route('transaction.detail',$item->id)}} " class="btn btn-info">
                                                <i class="fa fa-eye"></i>
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
            </div>
        </div>
    </div>
</div>
@endsection
