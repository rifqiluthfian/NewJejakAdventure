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
                            <h2 class="">Gallery Travel Package</h2>
                        </div>
                        <div class="col text-right">
                            <a href=" {{route('gallery.create')}} " class="btn btn-second ml-2">
                                <i class="las la-plus"></i> Add Picture
                            </a>
                        </div>
                    </div>
                    <table class="table table-responsive-sm table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Travel</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td>{{ $item->travel_package->title }}</td>
                                <td>
                                    <img src="{{Storage::url($item->image)}}" alt="" width="200" class="img-thumbnail">
                                </td>
                                <td>
                                    <a href=" {{route('gallery.edit',$item->id)}} " class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action=" {{route('gallery.delete',$item->id)}} " method="POST" class="d-inline">
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
