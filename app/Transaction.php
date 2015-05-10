<?php namespace App;

use App\Traits\EloquentTenantContext;
use Orchestra\Model\Eloquent;

class Transaction extends Eloquent
{
    use EloquentTenantContext;

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return $this->getTenantTable('transactions');
    }
}
