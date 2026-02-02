<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    // Hamma userlar ro‘yxatni ko‘ra oladi
    public function viewAny(User $authUser): bool
    {
        return true;
    }

    // Hamma userlar profilni ko‘ra oladi
    public function view(User $authUser, User $user): bool
    {
        return true;
    }

    // Faqat admin user yaratadi
    public function create(User $authUser): bool
    {
        return $authUser->role == 1;
    }

    // Admin yoki o‘zi edit qiladi
    public function update(User $authUser, User $user): bool
    {
        return $authUser->role == 1 || $authUser->id === $user->id;
    }

    // Faqat admin delete qiladi
    public function delete(User $authUser, User $user): bool
    {
        return $authUser->role == 1;
    }
}
