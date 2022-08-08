@extends('layouts.admin')
@section('title')
Documents Edit Admin
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Status Documents</h1>
        </div>

        <!-- Content Row -->
        <div class="row mx-4" style="width: 100%">
            <form action="{{route('documents.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <div class="row my-4">
                        <div class="col">
                            <label for="image"> <b>Identity (KTP/SIM)</b></label><br>
                            <img src="{{Storage::url($item->identity)}}" alt="" width="400" class="img-thumbnail">
                        </div>
                        <div class="col my-auto">
                            <label for="roles">Status</label>
                            <select name="status_identity" required class="form-control">
                                <option value=" {{$item->status_identity}} ">
                                    {{$item->status_identity}}
                                </option>
                                <option value="APPROVE">APPROVE</option>
                                <option value="DENIED">DENIED</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col">
                            <label for="image"> <b>Nomer Rekening</b></label><br>
                            <img src="{{Storage::url($item->nomer_rekening)}}" alt="" width="400" class="img-thumbnail">
                        </div>
                        <div class="col my-auto">
                            <label for="roles">Status</label>
                            <select name="status_nomer_rekening" required class="form-control">
                                <option value=" {{$item->status_nomer_rekening}} ">
                                    {{$item->status_nomer_rekening}}
                                </option>
                                <option value="APPROVE">APPROVE</option>
                                <option value="DENIED">DENIED</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                    </div>

                    <div class="row my-4">
                        <div class="col">
                            <label for="image"> <b>Certificate</b></label><br>
                            <img src="{{Storage::url($item->nomer_rekening)}}" alt="" width="400" class="img-thumbnail">
                        </div>
                        <div class="col my-auto">
                            <label for="status_certificate">Status</label>
                            <select name="status_certificate" required class="form-control">
                                <option value=" {{$item->status_certificate}} ">
                                    {{$item->status_certificate}}
                                </option>
                                <option value="APPROVE">APPROVE</option>
                                <option value="DENIED">DENIED</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="profile_instagram"> <b>Profile Instagram</b></label><br>
                            <img src="{{Storage::url($item->profile_instagram)}}" alt="" width="400" class="img-thumbnail">
                        </div>
                        <div class="col my-auto">
                            <label for="profile_instagram">Status</label>
                            <select name="profile_instagram" required class="form-control">
                                <option value=" {{$item->status_profile_instagram}} ">
                                    {{$item->status_profile_instagram}}
                                </option>
                                <option value="APPROVE">APPROVE</option>
                                <option value="DENIED">DENIED</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                        
                    </div>
                    <div class="row my-4">
                        <div class="col mt-auto">
                            <h4>Status Pengumpulan</h4>
                        </div>
                        <div class="col my-auto">
                            <label for="status_pengumpulan">Status</label>
                            <select name="status_pengumpulan" required class="form-control">
                                <option value=" {{$item->status_pengumpulan}} ">
                                    {{$item->status_pengumpulan}}
                                </option>
                                <option value="APPROVE">APPROVE</option>
                                <option value="DENIED">DENIED</option>
                                <option value="PENDING">PENDING</option>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
