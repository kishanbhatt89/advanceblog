@extends('layouts.app')

@section('content')
<div class="card m-t-19">
    <div class="card-header">Dashboard</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in!
    </div>
</div>
@endsection
