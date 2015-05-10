<?php namespace App\Listeners\Observers;

use Orchestra\Tenanti\Observer;

class MultiTenant extends Observer
{
    /**
     * Get driver name.
     *
     * @return string
     */
    public function getDriverName()
    {
        return 'user';
    }
}
