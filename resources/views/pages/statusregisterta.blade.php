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
            <div class="row faq-body mt-5 px-lg-5">
                <div class="container-fluid w-100 px-lg-5">
                    <h3 class="font-weight-bold my-4 text-center">Status Form document
                        @if ($status_pengumpulan == 'PENDING')
                        <span style="color:orange!important;"> {{$status_pengumpulan}}</span>
                        @elseif ($status_pengumpulan == 'DENIED')
                        <span style="color:red!important;"> {{$status_pengumpulan}}</span>
                        @endif
                    </h3>
                    @if ($status_pengumpulan == 'DENIED')
                    <div class="row faq-body mt-5">
                        <div class="container-fluid w-100 text-center">
                            <h3 class="font-weight-bold my-4 text-center">Your document has been denied by our team. Please contact us for more information.</h3>
                        </div>
                    </div>
                    @endif
                    


                    @if ($status_pengumpulan == NULL)
                    <!-- APABILA SUDAH MELAKUKAN PENGUMPULAN -->
                    <div class="row faq-body mt-5">
                        <div class="container-fluid w-100 text-center">
                            <h3 class="font-weight-bold my-4 text-center">You haven't registered yourself as a travel agent. Please register yourself first.</h3>
                        </div>
                    </div>
                    <!-- END -->
                    
                    @else
                    <form action="{{route('registerta.update')}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="row text-center">
                                <div class="col">
                                    <label for="image"> <b>Travel Agent name</b></label><br>
                                    <h4>{{$travelagent_name}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col col-lg-5">
                                    <label for="image"> <b>Identity (KTP/SIM)</b></label><br>
                                    <img src="{{Storage::url($no_identity)}}" alt="" width="200" class="img-thumbnail">
                                </div>
                                <div class="col col-lg-2 my-auto text-center">
                                    {{$status_identity}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col col-lg-5">
                                    <label for="no_rekening"><b>Buku Tabungan</b></label><br>
                                    <img src="{{Storage::url($no_rekening)}}" alt="" width="200" class="img-thumbnail">
                                </div>
                                <div class="col col-lg-2  my-auto text-center">
                                    {{$status_nomer_rekening}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col col-lg-5">
                                    <label for="certificate"> <b>Certificate</b> </label><br>
                                    <img src="{{Storage::url($certificate)}}" alt="" width="200" class="img-thumbnail">
                                    <br><small>*Fill blanks if you dont have it</small>
                                </div>
                                <div class="col col-lg-2 my-auto text-center">
                                    {{$status_certificate}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <div class="col col-lg-5">
                                    <label for="profil_instagram"> <b>Profile Instagram</b> </label><br>
                                    <img src="{{Storage::url($profile_instagram)}}" alt="" width="200" class="img-thumbnail">
                                </div>
                                <div class="col col-lg-2 my-auto text-center">
                                    {{$status_profile_instagram}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row justify-content-center my-4">
                                <div class="col col-lg-5 mt-auto">
                                    <label for="status_pengumpulan"> <b>Status Document</b> </label><br>
                                </div>
                                <div class="col col-lg-2 my-auto text-center">
                                    {{$status_pengumpulan}}
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success d-none">Update</button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
<!-- tutupdetailheader -->


@endsection