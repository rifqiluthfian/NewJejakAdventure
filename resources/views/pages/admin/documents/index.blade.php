@extends('layouts.admin')
@section('title')
Documents Admin
@endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Documents list user</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <table class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Name Travel</th>
                        <th scope="col">Status Documents</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $item)
                        <tr class='clickable-row' data-href='#'>
                            <td class="text-center">{{$item->id}}</td>
                            <td>{{ $item->user_documents->name }}</td>
                            <td>{{ $item->user_documents->travelagent_name }}</td>
                            <td>{{ $item->status_pengumpulan }}</td>
                            <td>
                                <a href=" {{route('documents.edit',$item->id)}} " class="btn btn-info">
                                    <i class="fa fa-upload"></i>
                                </a>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Data Kosong</td>
                    </tr> 
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
