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
                <h1 class="ml-5 mt-3">Whos is Going?</h1>
                <p class="ml-5 text-muted">
                Trip To Bromo
                </p>
                <div class="attendee">
                <table class="table table-responsive-sm text-center">
                    <thead>
                    <tr>
                        <td>Picture</td>
                        <td>Nama</td>
                        <td>No Identitas</td>
                        <td>No HP</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <img src="{{url('frontend/images/avatar-2.png')}}" width="60" alt="">
                        </td>
                        <td class="align-middle">
                        Bagus Pahlefi
                        </td>
                        <td class="align-middle">
                        3521737278172
                        </td>
                        <td class="align-middle">
                        0856457821272
                        </td>
                        <td class="align-middle">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="{{url('frontend/images/avatar-3.png')}}" width="60" alt="">
                        </td>
                        <td class="align-middle">
                        Bagus Pahlefi
                        </td>
                        <td class="align-middle">
                        3521737278172
                        </td>
                        <td class="align-middle">
                        0856457821272
                        </td>
                        <td class="align-middle">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                            <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                        </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div class="member mt-3">
                <h2>Add member</h2>
                <form action="" class="form-inline">
                    <label for="" class="sr-only">Name</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputUsername" placeholder="Username">

                    <label for="" class="sr-only">No Identity</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputNoidentity" placeholder="No Identity">

                    <label for="" class="sr-only">Phone Number</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inputPhonenumber" placeholder="Phone Number">

                    <button type="submit" class="btn btn-add-now my-2">
                    Add Member
                    </button>
                </form>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
            <div class="card card-details-right card-right">
                <h3>Detail pemesanan</h3>     
                <div class="members my-2">

                </div>
                <hr>
                <h4>Informasi trip</h4>
                <table class="trip-information">
                <tr>
                    <th width="50%">Jadwal Trip</th>
                    <td width="50%" class="text-right">12 Maret 2022</td>
                </tr>
                <tr>
                    <th width="50%">Durasi Trip</th>
                    <td width="50%" class="text-right">3H2D</td>
                </tr>
                <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-right">Rp.400.000</td>
                </tr>
                <tr>
                    <th width="50%">Sub Total</th>
                    <td width="50%" class="text-right">$ 280,00</td>
                </tr>
                <tr>
                    <th width="50%">Total (+Unique)</th>
                    <td width="50%" class="text-right text-total">
                    <span class="text-blue">$ 279,</span
                    ><span class="text-orange">33</span>
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
                <div class="bank-item pb-3">
                    <img
                    src="frontend/images/ic_bank.png"
                    alt=""
                    class="bank-image"
                    />
                    <div class="description">
                    <h3 style="font-size: 20px;">PT Jejak Adventure</h3>
                    <p>
                        0881 8829 8800
                        <br />
                        Bank Central Asia
                    </p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                </div>

            </div>
            <div class="join-container">
                <a href="{{route('success')}}" class="btn btn-block btn-join-now mt-3 py-2">
                Join Now
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>
    </main>
    <!-- tutupdetailheader -->
@endsection