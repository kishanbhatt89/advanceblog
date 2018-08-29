@extends('layouts.manage')

@section('content')

    <div class="list-group">
        <span href="#" class="list-group-item list-group-item-primary active">
            Edit User: <span class="float-right"><b>{{ $user->name }}</b></span>
        </span>

        <form method="POST" action="{{ route('users.update',$user->id) }}" class="m-t-10">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="" value="{{ $user->name }}">
            </div>
            @if ($errors->has('name'))
                <p class="alert alert-danger">{{ $errors->first('name') }}</p>
            @endif
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="" value="{{ $user->email }}">
            </div>
            @if ($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif
            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="">
            </div>
            @if ($errors->has('password'))
                <p class="alert alert-danger">{{ $errors->first('password') }}</p>
            @endif
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>

@endsection
