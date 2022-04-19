@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content between mb-4">
            <h1 class="h3 mb-0 text-gray-800">
                Edit Roles Member {{$item->title}}
            </h1>
        </div>
    </div>

    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('usermanagement.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="roles">ROLES</label>
                    <select name="roles" required class="form-controll">
                        <option value=" {{$item->roles}} ">
                            {{$item->roles}}
                        </option>
                        <option value="TRAVELAGENT">Travel Agent</option>
                        <option value="USER">User</option>
                        <option value="ADMIN">Admin</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success btn-block">Save</button>
            </form>
        </div>
    </div>
    
</div>

@endsection
