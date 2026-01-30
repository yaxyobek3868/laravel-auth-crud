@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<h1>Edit User</h1>

<form action="{{ route('users.update', $user) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Last_name</label>
        <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" >
        @error('last_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">First_name</label>
        <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control">
        @error('first_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" value="{{ $user->username }}" class="form-control">
        @error('username')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" >
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone_number</label>
        <input type="text" name="phone_number" value="{{ $user->phone_number }}" class="form-control">
        @error('phone_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Birth Date</label>
        <input type="date" name="date_of_birth" value="{{ $user->date_of_birth }}" class="form-control">
        @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" value="{{ $user->address }}" class="form-control">
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
