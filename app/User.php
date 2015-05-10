<?php namespace App;

use Orchestra\Model\User as Eloquent;

class User extends Eloquent
{
    /**
     * Available subscription types.
     */
    const SUBSCRIPTION_FOREVER = 'forever';
    const SUBSCRIPTION_TRIAL   = 'trial';
    const SUBSCRIPTION_YEARLY  = 'yearly';
}
