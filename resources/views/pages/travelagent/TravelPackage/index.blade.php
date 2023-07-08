@extends('layouts.travelagent')
@section('title')
Index travel package
@endsection
@section('content')

<style>
    div.dataTables_wrapper div.dataTables_filter {
        overflow: hidden;
    }
    </style>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card my-5 shadow-sm overflow-hidden">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="">Travel Package</h2>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('travelpackage.create')}}" class="btn btn-second ml-2">
                                <i class="las la-plus"></i> Add Package
                            </a>
                        </div>
                    </div>
                    <table class="table table-responsive-sm" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Location</th>
                                <th scope="col">Deparature Date</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Type</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->location }}</td>
                                <td>{{ $item->departure_date }}</td>
                                <td>{{ $item->duration }}</td>
                                <td>{{ $item->type }}</td>
                                <td>Rp. 
                                    @php
                                    echo number_format("$item->price")."<br>";
                                    @endphp
                                </td>
                                <td>
                                    <a href=" {{route('travelpackage.edit',$item->id)}} " class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action=" {{route('travelpackage.delete',$item->id)}} " method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
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
@endsection
