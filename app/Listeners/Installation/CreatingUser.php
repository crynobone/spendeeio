<?php namespace App\Listeners\Installation;

use App\User;
use Orchestra\Model\Eloquent;

class CreatingUser
{
    /**
     * Handle the event.
     *
     * @param  \Orchestra\Model\Eloquent $user
     *
     * @return void
     */
    public function handle(Eloquent $user)
    {
        $user->setAttribute('username', 'administrator');
        $user->setAttribute('subscription', User::SUBSCRIPTION_FOREVER);
    }
}
