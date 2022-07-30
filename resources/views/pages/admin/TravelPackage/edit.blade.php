@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit Package Travel {{$item->title}}
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travelpackageadmin.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{$item->title}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location" value="{{$item->location}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Departure_date">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" placeholder="Departure Date" value="{{$item->departure_date}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Duration">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="duration" value="{{$item->duration}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <input type="text" name="type" id="type" placeholder="type" value="{{$item->type}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" placeholder="price" value="{{$item->price}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="About">Detail</label>
                    <input type="text" name="about" id="detail" placeholder="detail" value="{{$item->about}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="About">Itinerary</label>
                    <input type="text" name="itinerary" id="itinerary" placeholder="About" value="{{$item->itinerary}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
