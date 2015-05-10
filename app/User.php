<?php namespace App;

use Orchestra\Model\User as Eloquent;

class User extends Eloquent
{
    const SUBSCRIPTION_FOREVER = 'forever';
    const SUBSCRIPTION_TRIAL   = 'trial';
    const SUBSCRIPTION_YEARLY  = 'yearly';
}
