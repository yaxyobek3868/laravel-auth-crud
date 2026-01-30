@extends('layouts.app')

@section('title', 'User Details')

@section('content')
<h1>User Show</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $user->id }}</li>
    <li class="list-group-item"><strong>Last_name:</strong> {{ $user->last_name }}</li>
    <li class="list-group-item"><strong>First_name:</strong> {{ $user->first_name }}</li>
    <li class="list-group-item"><strong>Username:</strong> {{ $user->username }}</li>
    <li class="list-group-item"><strong>Password:</strong> {{ $user->password }}</li>
    <li class="list-group-item"><strong>Phone_number:</strong> {{ $user->phone_number }}</li>
    <li class="list-group-item"><strong>Birth Date:</strong> {{ $user->date_of_birth }}</li>
    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
</ul>

<a href="{{ route('users.index') }}" class="btn btn-secondary mt-3">Back</a>
@endsection
