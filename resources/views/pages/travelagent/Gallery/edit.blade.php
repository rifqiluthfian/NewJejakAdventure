@extends('layouts.travelagent')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit Package Travel
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('gallery.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="Username">Username</label>
                    <input readonly="readonly" type="text" name="username" id="username" placeholder="{{Auth::user()->username}}" value="{{Auth::user()->username}}" class="form-control">
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
