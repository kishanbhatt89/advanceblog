@extends('layouts.manage')

@section('content')
    <div class="list-group">
        <span href="#" class="list-group-item list-group-item-primary active">
            Users
            <a href="{{ route('users.create') }}" class="btn btn-sm btn-dark float-right">Create New User</a>
        </span>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at->toFormattedDateString() }}</td>
                        <td><a href="{{ route('users.edit',$user->id) }}" class="btn btn-sm btn-dark">Edit</a></td>
                    </tr>
                @endforeach
          </tbody>
        </table>
        {{ $users->links() }}
    </div>
@endsection
