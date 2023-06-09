<?php

namespace App\Observers;

use App\Models\Log;
use App\Models\User;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(User $user)
    {
        Log::create([
            'model'=>'User',
            'person'=>Auth::user()->name,
            'aksi'=>'Create',
            'log'=>'Data ' .$user->name.' ('.$user->level.') telah ditambahkan oleh '.Auth::user()->name,
        ]);
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        Log::create([
            'model'=>'User',
            'person'=>Auth::user()->name,
            'aksi'=>'Update',
            'log'=>'Data '.$user->level.' telah diubah oleh '.Auth::user()->name,
        ]);
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        Log::create([
            'model'=>'User',
            'person'=>Auth::user()->name,
            'aksi'=>'Delete',
            'log'=>'Data'.$user->name.' ('.$user->level.') telah dihapus oleh '.Auth::user()->name,
        ]);
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
