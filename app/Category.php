<?php namespace App;

use App\Traits\EloquentTenantContext;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use EloquentTenantContext;

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
