@extends('layouts.travelagent')
@section('title')
Add travel package
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Add Package Travel
            </h1>
        </div>
    </div>


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('travelpackage.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" placeholder="title" value="{{old('title')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Username">Travel Agent Name</label>
                    <input readonly="readonly" type="text" name="travelagent_name" id="travelagent_name" placeholder="{{Auth::user()->travelagent_name}}" value="{{Auth::user()->travelagent_name}}" class="form-control">
                   
                </div>
                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location" value="{{old('location')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Departure_date">Departure Date</label>
                    <input type="date" name="departure_date" id="departure_date" placeholder="Departure Date" value="{{old('departure_date')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Duration">Duration</label>
                    <input type="text" name="duration" id="duration" placeholder="exm 3D2N" value="{{old('duration')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <select id="type" name="type" class="form-control">
                        <option value="Open Trip">Open Trip</option>
                        <option value="Private Trip">Private Trip</option>
                    </select>
                    <small>Open trip : more 5 member</small><br>
                    <small>Private trip : less than 5 member</small>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" id="rupiah" placeholder="price (Just input the number,System will formating automatic)" value="{{old('price')}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="Detail">Detail</label>
                    <textarea type="text" name="about" id="detail" placeholder="Detail your trip" value="{{old('about')}}" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="Itinerary">Itinerary</label>
                    <textarea type="text" name="itinerary" id="itinerary" placeholder="itinerary your trip" value="{{old('itinerary')}}" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
