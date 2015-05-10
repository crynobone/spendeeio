<?php namespace App\Listeners\Installation;

use App\User;
use Illuminate\Database\Schema\Blueprint;

class CreatingUserSchema
{
    /**
     * Handle the event.
     *
     * @param \Illuminate\Database\Schema\Blueprint $table
     * @return void
     */
    public function handle(Blueprint $table)
    {
        $table->string('subscription')->default(User::SUBSCRIPTION_TRIAL)->nullable();
        $table->timestamp('trial_ends_at')->nullable();
        $table->timestamp('subscription_ends_at')->nullable();
    }
}
