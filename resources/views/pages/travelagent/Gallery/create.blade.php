@extends('layouts.travelagent')
@section('title')
Add picture travel package
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Add Picture Package Travel
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="travel_packages_id">Travel Packages</label>
                    <select name="travel_packages_id" required class="form-control">
                        <option required value="">Choose your travel packages</option>
                        @foreach ($travel_packages as $travel_package)
                            <option value="{{$travel_package->id}}">
                                {{$travel_package->title}}
                            </option>
                        @endforeach
                    </select>
                </div>
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
