@extends('layouts.admin')

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
                    </div>
                    <table class="table table-responsive-sm" id="table_id">
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
                                <th scope="col">Action</th>
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
                                <td>Rp. 
                                    @php
                                    echo number_format("$item->price")."<br>";
                                    @endphp
                                </td>
                                <td>
                                    <a href=" {{route('travelpackageadmin.edit',$item->id)}} " class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action=" {{route('travelpackageadmin.delete',$item->id)}} " method="POST" class="d-inline">
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
