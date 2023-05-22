<?php

namespace App\Policies;

use App\Models\Control;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ControlPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Control $control)
    {
        if ($control->supervision->work->completion_date) {
            return Response::deny()->asNotFound();
        }
        return Response::allow();
        // return Response::deny();
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Control $control)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Control $control)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Control $control)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Control  $control
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Control $control)
    {
        //
    }
}
