@extends('layouts.app')
@section('tittle')
Checkout Page
@endsection

@section('content')
<!-- detailheader -->
<main class="details-header">
    <section class="section-details-header">
    </section>
    <section class="section-details-content">
        <div class="container">
        <div class="row">
            <div class="col-sm-d-none p-0">
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    Trip
                </li>
                <li class="breadcrumb-item">
                    Detail Trip
                </li>
                <li class="breadcrumb-item active">
                    Checkout
                </li>
                </ol>
            </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
            <div class="card card-details">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{$error}} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1 class="ml-5 mt-3">Whos is Going?</h1>
                <p class="ml-5 text-muted">
                Trip To {{$item->travel_package->title}},{{$item->travel_package->location}}
                </p>
                <div class="attendee">
                <table class="table table-responsive-sm text-center">
                    <thead>
                    <tr>
                        <td>Picture</td>
                        <td>Name</td>
                        <td>No Identity</td>
                        <td>Phone Number</td>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($item->details as $detail)
                        <tr>
                            <td>
                                <img src="https://ui-avatars.com/api/?name={{$detail->username}} " height="60" 
                                class="rounded-circle" alt="">
                            </td>
                            <td class="align-middle">
                                {{$detail->username}}
                            </td>
                            <td class="align-middle">
                                {{$detail->no_identity}}
                            </td>
                            <td class="align-middle">
                                {{$detail->no_phone}}
                            </td>
                            @if ($loop->first)
      
                            @else
                            <td class="align-middle">
                                <a href=" {{route('checkout.remove',$detail->id)}} ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                                    <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                                    </svg>
                                </a>
                            </td>
                            @endif
                        </tr>
                    @empty
                        <td colspan="6" class="text-center">
                            No Visitor
                        </td>
                    @endforelse
                    </tbody>
                </table>
                </div>
                <div class="member mt-3">
                <h2>Add member</h2>
                <form action="{{route('checkout.create',$item->id)}}" method="POST" class="form-inline">
                    @csrf
                    <label for="username" class="sr-only">Name</label>
                    <input type="text" name="username" class="form-control mb-2 mr-sm-2" id="username" required placeholder="username">

                    <label for="no_identity" class="sr-only">No Identity</label>
                    <input type="text" name="no_identity" class="form-control mb-2 mr-sm-2" id="no_identity" required placeholder="No Identity">

                    <label for="no_phone" class="sr-only">Phone Number</label>
                    <input type="text" name="no_phone" class="form-control mb-2 mr-sm-2" id="no_phone" required placeholder="Phone Number">

                    <button type="submit" class="btn btn-add-now my-2">
                    Add Member
                    </button>
                </form>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card card-details-right card-right">
                <h4>Checkout Information</h4>
                <table class="trip-information">
                    <tr>
                        <th width="50%">Member Trip</th>
                        <td width="50%" class="text-right">
                            {{$item->details->count()}} Person
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Schedule Trip</th>
                        <td width="50%" class="text-right">
                            {{ \Carbon\Carbon::create($item->travel_package->departure_date)->format('F n,Y') }}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Duration Trip</th>
                        <td width="50%" class="text-right">
                            {{$item->travel_package->duration}}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Price</th>
                        <td width="50%" class="text-right">
                            Rp.
                            {{$item->travel_package->price}}
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Sub Total</th>
                        <td width="50%" class="text-right">
                            Rp. 
                                @php
                                echo number_format("$item->transaction_total")."<br>";
                                @endphp
                        </td>
                    </tr>
                    <tr>
                        <th width="50%">Total (+Unique)</th>
                        <td width="50%" class="text-right text-total">
                        <span class="text-primary">Rp. 
                            @php
                            echo number_format("$item->transaction_total")."<br>";
                            @endphp</span> +
                            <span class="text-warning">{{mt_rand(0,99)}}</span>
                        </td>
                    </tr>
                </table>

                <hr />
                <h2>Payment Instructions</h2>
                <p class="payment-instructions">
                Please complete your payment before to continue the wonderful
                trip
                </p>
                <div class="bank">
                    <img src="{{url('frontend/images/logo-gopay.png')}}" width="250" alt="">
                </div>

            </div>
                <div class="join-container">
                    <a href="{{route('checkout.success',$item->id)}}" class="btn btn-block btn-join-now mt-3 py-2">
                        Process Payment
                    </a>
                </div>
                <div class="text-center mt-3">
                    <a href=" {{route('checkout.cancel',$item->id)}} " class="text-muted">
                        Cancel Booking
                    </a>
                </div>
            </div>
        </div>
        </div>
    </section>
    </main>
    <!-- tutupdetailheader -->
@endsection