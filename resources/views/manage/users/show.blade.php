@extends('layouts.manage')

@section('content')

    <div class="list-group">
        <span href="#" class="list-group-item list-group-item-primary active m-b-10">
            User ID : <span><b>{{ $user->id }}</b></span>
            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-dark float-right">Edit User</a>
        </span>
        <div class="form-group">
            <label for="name"><b>Name:</b></label>
            <p>{{ $user->name }}</p>
        </div>
        <div class="form-group">
            <label for="email"><b>Email</b></label>
            <p>{{ $user->email }}</p>
        </div>
    </div>

@endsection
