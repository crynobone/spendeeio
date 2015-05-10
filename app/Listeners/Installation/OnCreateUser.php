<?php namespace App\Listeners\Installation;

use App\User;
use Orchestra\Model\Eloquent;

class OnCreateUser
{
    /**
     * Handle the event.
     *
     * @param  \Orchestra\Model\Eloquent $user
     * @return void
     */
    public function handle(Eloquent $user)
    {
        $user->setAttribute('subscription', User::SUBSCRIPTION_FOREVER);
    }
}
