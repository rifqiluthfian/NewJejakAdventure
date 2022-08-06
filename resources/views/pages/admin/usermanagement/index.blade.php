@extends('layouts.admin')
@section('title')
Index usermanagement
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <span id="ct" class="mt-3 d-block text-right"></span>
            <div class="card my-5 shadow-sm">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col">
                            <h2 class="">User Management</h2>
                        </div>
                    </div>
                    <table class="table table-responsive-sm table-hover" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Email verified</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->roles }}</td>
                                <td> @if ($item->email_verified_at == null)
                                        <h6 class="mb-0">Not Yet</h6>
                                     @else
                                        <h6 class="mb-0">Done</h6>
                                     @endif
                                </td>
                                <td>
                                    <a href=" {{route('usermanagement.edit',$item->id)}} " class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action=" {{route('usermanagement.destroy',$item->id)}} " method="POST" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
