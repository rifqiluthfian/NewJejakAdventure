@extends('layouts.travelagent')

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
            <form action="{{route('travelpackage.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{$item->title}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Username">Username</label>
                    <input readonly="readonly" type="text" name="username" id="username" placeholder="{{Auth::user()->username}}" value="{{Auth::user()->username}}" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location" value="{{$item->location}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="About">About</label>
                    <textarea type="text" name="about" id="about" placeholder="Detail your trip" value="{{$item->about}}" rows = "4"  class="form-control">{{$item->about}}</textarea>
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
                    <select id="type" name="type" class="form-control">
                        <option value="{{$item->type}}">{{$item->type}}</option>
                        <option value="Open Trip">Open Trip</option>
                        <option value="Private Trip">Private Trip</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="price" placeholder="price" value="{{$item->price}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
