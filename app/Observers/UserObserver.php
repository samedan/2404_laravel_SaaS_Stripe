<?php

namespace App\Observers;
use App\Models\User;

class UserObserver
{
    // public function creating(User $user){
    //     $user->available_credits = 10;
    //     $user->save();
    // }
    public function created(User $user){
        $user->available_credits = 10;
        // $user->save();
    }
}
