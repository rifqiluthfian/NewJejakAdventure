@extends('layouts.app')
@section('title')
Register Travel Agent
@endsection
@section('content')
    <!-- detailheader -->
    <main class="details-header">
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-d-none p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item-berita active">
                                    Status Register Travel Agent
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row faq-body">
                    <div class="container-fluid">
                        <h3 class="font-weight-bold my-4 text-center">Status Form document</h3>
                        <form action="{{route('registerta.update')}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="image"> <b>Travel Agent name</b></label><br>
                                        <h4>{{$travelagent_name}}</h4>
                                    </div>
                                    <div class="col my-auto text-center">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="image"> <b>Identity (KTP/SIM)</b></label><br>
                                        <img src="{{Storage::url($no_identity)}}" alt="" width="200" class="img-thumbnail">
                                    </div>
                                    <div class="col my-auto text-center">
                                        {{$status_identity}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="no_rekening"><b>Buku Tabungan</b></label><br>
                                        <img src="{{Storage::url($no_rekening)}}" alt="" width="200" class="img-thumbnail">
                                    </div>
                                    <div class="col my-auto text-center">
                                        {{$status_nomer_rekening}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="certificate"> <b>Certificate</b> </label><br>
                                        <img src="{{Storage::url($certificate)}}" alt="" width="200" class="img-thumbnail">
                                        <br><small>*Fill blanks if you dont have it</small>
                                    </div>
                                    <div class="col my-auto text-center">
                                        {{$status_certificate}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="profil_instagram"> <b>Profile Instagram</b> </label><br>
                                        <img src="{{Storage::url($profile_instagram)}}" alt="" width="200" class="img-thumbnail">
                                    </div>
                                    <div class="col my-auto text-center">
                                        {{$status_profile_instagram}}
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success d-none">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!-- tutupdetailheader -->

   
@endsection