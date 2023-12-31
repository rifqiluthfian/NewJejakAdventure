@extends('layouts.admin')
@section('title')
Edit news
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit News {{$item->title}}
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('news.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{$item->title}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Sub Title</label>
                    <input type="text" name="subtitle" id="subtitle" placeholder="subtitle" value="{{$item->subtitle}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" placeholder="date" value="{{$item->date}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contents">Contents</label>
                    <textarea type="text" name="contents" id="contents" placeholder="contents" value="{{$item->contents}}" row="40" class="form-control">{{$item->contents}}</textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
