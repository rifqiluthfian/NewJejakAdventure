@extends('layouts.app')
@section('title')
Register Travel Agent
@endsection
@section('content')
<!-- detailheader -->
<main class="details-header">
    <section class="section-details-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-d-none p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item-berita active">
                                Register Travel Agent
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            @if ($status_pengumpulan == 'PENDING')
            <!-- APABILA SUDAH MELAKUKAN PENGUMPULAN -->
            <div class="row faq-body mt-5">
                <div class="container-fluid w-100 text-center">
                    <h3 class="font-weight-bold my-4 text-center">You have already registered. Please wait for our team to verify it.</h3>
                    <img src="{{url('frontend/images/pending.png')}}" width="250" alt="">
                </div>
            </div>
            <!-- END -->
            @else

            <!-- START FORM -->
            <div class="row faq-body mt-5">
                <div class="container-fluid w-100">
                    <h3 class="font-weight-bold my-4 text-center">Form document for join with us</h3>
                    <form action="{{route('registerta.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="image">Travel Agent Name</label>
                                    <input type="text" name="travel_agent_name" id="travel_agent_name" placeholder="Name Your Travel Agent" value="{{old('travel_agent_name')}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="image">Identity (KTP/SIM)</label>
                                    <input type="file" accept="image/*" name="img_identity" placeholder="image" class="form-control">
                                    <small>Max size foto : 2Mb</small><br>
                                    <small>Support PNG , JPG , Jpeg , Jfif</small>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="no_rekening">No rekening</label>
                                    <input type="file" accept="image/*" name="no_rekening" placeholder="image" class="form-control">
                                    <small>Max size foto : 2Mb</small><br>
                                    <small>Support PNG , JPG , Jpeg , Jfif</small>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="certificate">Certificate</label>
                                    <input type="file" accept="image/*" name="certificate" placeholder="image" class="form-control">
                                    <small>*Fill blanks if you dont have it</small>
                                    <small>Max size foto : 2Mb</small><br>
                                    <small>Support PNG , JPG , Jpeg , Jfif</small>
                                </div>


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <label for="profil_instagram">Profil Instagram</label>
                                    <input type="file" accept="image/*" name="profile_instagram" placeholder="image" class="form-control">
                                    <small>Max size foto : 2Mb</small><br>
                                    <small>Support PNG , JPG , Jpeg , Jfif</small>
                                </div>

                            </div>
                        </div>
                        <input type="hidden" name="status_pengumpulan" id="status_pengumpulan" placeholder="Name Your Travel Agent" value="PENDING" class="form-control">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </form>
                </div>
            </div>
            @endif
            <!-- END -->

        </div>
    </section>
</main>
<!-- tutupdetailheader -->


@endsection