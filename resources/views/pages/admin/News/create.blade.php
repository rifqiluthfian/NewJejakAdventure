@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Add News Jejak Adventure
            </h1>
        </div>
    </div>

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('news.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{old('title')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" placeholder="date" value="{{old('date')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contents">Contents</label>
                    <input type="text" name="contents" id="contents" placeholder="contents" value="{{old('content')}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
