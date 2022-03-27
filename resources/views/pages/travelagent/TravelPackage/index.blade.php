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
                            <h2 class="">Travel Package</h2>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('travelpackage.create')}}" class="btn btn-second ml-2">
                                <i class="las la-plus"></i> Add Travel
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <table class="table table-responsive table-hover" id="table_id">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">About</th>
                                        <th scope="col">Deparature Date</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->location }}</td>
                                        <td>{{ $item->about }}</td>
                                        <td>{{ $item->departure_date }}</td>
                                        <td>{{ $item->duration }}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->price }}</td>
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
