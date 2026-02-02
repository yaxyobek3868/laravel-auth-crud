<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(User::class, 'user');
    }
    public function index(Request $request)
    {
        $users = User::when($request->search, function ($q) use ($request) {
                $q->where('first_name', 'like', '%'.$request->search.'%')
                  ->orWhere('last_name', 'like', '%'.$request->search.'%')
                  ->orWhere('username', 'like', '%'.$request->search.'%')
                  ->orWhere('phone_number', 'like', '%'.$request->search.'%')
                  ->orWhere('address', 'like', '%'.$request->search.'%')
                  ->orWhere('date_of_birth', 'like', '%'.$request->search.'%')
                  ->orWhere('email', 'like', '%'.$request->search.'%');
            })
            ->latest()
            ->paginate(10);

        return view('users.index', compact('users'));
    }

    public function create()
    {

        return view('users.create');
    }

    public function store(UserRequest $request)
    {

        User::create([
            'first_name' => $request->validated()['first_name'],
            'last_name'  => $request->validated()['last_name'],
            'username'   => $request->validated()['username'],
            'email'      => $request->validated()['email'],
            'address'    => $request->validated()['address'],
            'phone_number'=> $request->validated()['phone_number'],
            'date_of_birth' => $request->validated()['date_of_birth'],
            'password'   => Hash::make($request->validated()['password']),

        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'Foydalanuvchi yaratildi');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    public function edit(User $user)
        {
            return view('users.edit', compact('user'));
        }

    public function update(UserRequest $request, User $user)
    {

        $user->fill([
            'first_name' => $request->validated()['first_name'],
            'last_name'  => $request->validated()['last_name'],
            'username'   => $request->validated()['username'],
            'email'      => $request->validated()['email'],
            'address'    => $request->validated()['address'] ?? null,
            'phone_number' => $request->validated()['phone_number'] ?? null,
            'date_of_birth' => $request->validated()['date_of_birth'],
        ]);

        if ($request->filled('password')) {
            $user->fill(['password' => Hash::make($request->validated()['password'])]);
        }

        $user->save();

        return redirect()
            ->route('users.index')
            ->with('success', 'Foydalanuvchi yangilandi');
    }

    public function destroy(User $user)
   {
        $user->delete();

        return redirect()
            ->route('users.index')
            ->with('success', 'Foydalanuvchi o‘chirildi');
    }
}
