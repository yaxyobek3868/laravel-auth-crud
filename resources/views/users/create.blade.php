@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<h1>Create User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Last_name</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
        @error('last_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">First_name</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
        @error('first_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" value="{{ old('username') }}">
        @error('username')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" value="{{ old('password') }}">
        @error('password')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number') }}">
        @error('phone_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Birth Date</label>
        <input type="date" name="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
        @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" value="{{ old('address') }}">
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Save</button>

</form>
@endsection
