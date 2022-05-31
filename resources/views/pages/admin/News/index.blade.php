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
                            <h2 class="">News JejakAdventure</h2>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('news.create')}}" class="btn btn-second ml-2">
                                <i class="las la-plus"></i> Add News
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card-body">
                            <table class="table" id="table_id">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                    <tr>
                                        <td class="text-center">{{$item->id}}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>
                                            <a href=" {{route('news.edit',$item->id)}} " class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <a href=" {{route('gallerynews.index')}} " class="btn btn-info">
                                                <i class="fas fa-images"></i>
                                            </a>
                                            <form action=" {{route('news.delete',$item->id)}} " method="POST" class="d-inline">
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
    </div>
</div>
@endsection
