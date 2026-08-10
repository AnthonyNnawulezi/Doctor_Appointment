<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Speciality;

class SpecialityPolicy
{
    /**
     * Create a new policy instance.
     */
    public function delete(User $user, Speciality $speciality): bool
    {
        return $user->role === 'admin';
    }

    public function update(User $user, Speciality $speciality): bool
    {
        return $user->role === 'admin';
    }
}
