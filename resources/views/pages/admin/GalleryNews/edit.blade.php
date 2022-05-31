@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit News Of Jejak Adventure
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('gallerynews.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="news_id">Title News</label>
                    <select name="news_id" required class="form-control">
                        <option required value="">Choose your title news</option>
                        @foreach ($news_item as $new_item)
                            <option value="{{$new_item->id}}">
                                {{$new_item->title}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                   <input type="file" name="image" placeholder="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
