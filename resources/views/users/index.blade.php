@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-2">
    <h1>Users</h1>

    <form action="{{ route('users.index') }}" method="GET" class="d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Search..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
        @can('create', App\Models\User::class)
        <a href="{{ route('users.create') }}" class="btn btn-success ms-2">
            Add User
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
        </a>
    @endcan
    </a>
</div>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Birth Date</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone_number }}</td>
            <td>{{ $user->date_of_birth }}</td>
            <td>{{ $user->address }}</td>
            <td>
                <a href="{{ route('users.show', $user) }}" class="btn btn-info btn-sm">
                    View</a>
                    @can('update', $user)
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-sm">Edit</a>
                    @endcan

                    @can('delete', $user)
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    @endcan
            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<div class="mt-3">
    {{ $users->links() }}
</div>
@endsection
