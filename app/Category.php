<?php namespace App;

use App\Traits\EloquentTenantContext;
use Illuminate\Database\Eloquent\Model;
use Orchestra\Model\Traits\MetableTrait;

class Category extends Model
{
    use EloquentTenantContext, MetableTrait;

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        return $this->getTenantTable('categories');
    }
}
