@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<h1>Create User</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Last_name</label>
        <input type="text" name="last_name" class="form-control" >
        @error('last_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">First_name</label>
        <input type="text" name="first_name" class="form-control" >
        @error('first_name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control" >
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
        <input type="email" name="email" class="form-control" >
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Phone number</label>
        <input type="text" name="phone_number" class="form-control" >
        @error('phone_number')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Birth Date</label>
        <input type="date" name="date_of_birth" class="form-control" >
        @error('date_of_birth')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Address</label>
        <input type="text" name="address" class="form-control" >
        @error('address')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Save</button>

</form>
@endsection
