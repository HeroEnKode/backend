<?php

namespace App\Policies;

use App\Models\SystemUnit;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SystemUnittPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return mixed
     */
    public function view(User $user, SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permissions()->contains('/empresas/add');
    }

    public function duplicar(User $user)
    {
        return $user->permissions()->contains('/empresas/duplicar');
    }
   

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return mixed
     */
    public function update(User $user, SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return mixed
     */
    public function delete(User $user, SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return mixed
     */
    public function restore(User $user, SystemUnit $systemUnit)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\SystemUnit  $systemUnit
     * @return mixed
     */
    public function forceDelete(User $user, SystemUnit $systemUnit)
    {
        //
    }
}
