@extends('layouts.admin')
@section('title')
Edit gallery
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit Gallery Jejak Adventure
            </h1>
        </div>
    </div>

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('galleryadmin.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value=" {{$item->title}} " class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Description</label>
                    <input type="text" name="description" id="description" placeholder="description" value="{{$item->description}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                   <input type="file" name="image" id="image" placeholder="image" class="form-control">
                </div>
                <div class="form-row my-4">
                    <div class="col-6">
                            <img src="{{Storage::url($item->image)}}" alt="" width="200" class="img-thumbnail">
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
