<?php namespace App;

use App\Traits\EloquentTenantContext;
use Orchestra\Model\Eloquent;
use Orchestra\Model\Traits\MetableTrait;

class Transaction extends Eloquent
{
    use EloquentTenantContext, MetableTrait;

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
