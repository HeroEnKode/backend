<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, User $model)
    {
        //
    }

    public function create(User $user)
    {
        return $user->permissions()->contains('create-user');
    }

    public function update(User $user, User $model)
    {
        return $user->permissions()->contains('update-user');
    }

    public function delete(User $user, User $model)
    {
        return $user->permissions()->contains('delete-user');
    }

    public function restore(User $user, User $model)
    {
        //
    }

    public function forceDelete(User $user, User $model)
    {
        //
    }
}
