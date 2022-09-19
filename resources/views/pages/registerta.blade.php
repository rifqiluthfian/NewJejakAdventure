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
                                    Register Travel Agent
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row faq-body">
                    <div class="container-fluid">
                        <h3 class="font-weight-bold my-4 text-center">Form document for join with us</h3>
                        <form action="{{route('registerta.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="image">Travel Agent Name</label>
                                        <input type="text" name="travel_agent_name" id="travel_agent_name" placeholder="Name Your Travel Agent" value="{{old('travel_agent_name')}}" class="form-control">
                                    </div>
                                    <div class="col my-auto text-center">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="image">Identity (KTP/SIM)</label>
                                        <input type="file" name="img_identity" placeholder="image" class="form-control">
                                        <small>Max size foto : 2Mb</small><br>
                                        <small>Support PNG , JPG , Jpeg , Jfif</small>
                                    </div>
                                    <div class="col my-auto text-center">
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="no_rekening">No rekening</label>
                                        <input type="file" name="no_rekening" placeholder="image" class="form-control">
                                        <small>Max size foto : 2Mb</small><br>
                                        <small>Support PNG , JPG , Jpeg , Jfif</small>
                                    </div>
                                    <div class="col my-auto text-center">
                                    
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="certificate">Certificate</label>
                                        <input type="file" name="certificate" placeholder="image" class="form-control">
                                        <small>*Fill blanks if you dont have it</small>
                                        <small>Max size foto : 2Mb</small><br>
                                        <small>Support PNG , JPG , Jpeg , Jfif</small>
                                    </div>
                                    <div class="col my-auto text-center">
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="profil_instagram">Profil Instagram</label>
                                        <input type="file" name="profile_instagram" placeholder="image" class="form-control">
                                        <small>Max size foto : 2Mb</small><br>
                                        <small>Support PNG , JPG , Jpeg , Jfif</small>
                                    </div>
                                    <div class="col my-auto text-center">
                                      
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
<!-- tutupdetailheader -->

   
@endsection