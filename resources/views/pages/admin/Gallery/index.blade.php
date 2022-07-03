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
                            <h2 class="">Gallery JejakAdventure</h2>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('galleryadmin.create')}}" class="btn btn-second ml-2">
                                <i class="las la-plus"></i> Add Gallery
                            </a>
                        </div>
                    </div>
                    <table class="table table-responsive-sm" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Image</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                            <tr>
                                <td class="text-center">{{$item->id}}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <img src="{{Storage::url($item->image)}}" alt="" width="200" class="img-thumbnail">
                                </td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <a href=" {{route('galleryadmin.edit',$item->id)}} " class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                        
                                    <form action=" {{route('galleryadmin.delete',$item->id)}} " method="POST" class="d-inline">
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
