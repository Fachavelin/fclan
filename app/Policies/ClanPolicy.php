<?php

namespace App\Policies;

use App\User;
use App\Clan;
use Illuminate\Auth\Access\HandlesAuthorization;

class ClanPolicy
{
    use HandlesAuthorization;

    public function before($user){
        if ($user->hasRole('Admin'))
        {
            return true;
        }
    }
    /**
     * Determine whether the user can view the clan.
     *
     * @param  \App\User  $user
     * @param  \App\Clan  $clan
     * @return mixed
     */
    public function view(User $user, Clan $clan)
    {
        return $user->id ===$clan->user_id;
    }

    /**
     * Determine whether the user can create clans.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the clan.
     *
     * @param  \App\User  $user
     * @param  \App\Clan  $clan
     * @return mixed
     */
    public function update(User $user, Clan $clan)
    {
        //
        return $user->id ===$clan->user_id;
    }

    /**
     * Determine whether the user can delete the clan.
     *
     * @param  \App\User  $user
     * @param  \App\Clan  $clan
     * @return mixed
     */
    public function delete(User $user, Clan $clan)
    {
        //
        return $user->id ===$clan->user_id;
    }
}
