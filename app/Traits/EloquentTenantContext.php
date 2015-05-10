<?php namespace App\Traits;

use App\Contracts\TenantNotFoundException;

trait EloquentTenantContext
{
    /**
     * Get tenant table name.
     *
     * @param  string|null  $table
     *
     * @return string
     *
     * @throws \App\Contracts\TenantNotFoundException
     */
    protected function getTenantTable($table = null)
    {
        $tenant = get_meta('tenant::id');
        $table  = $table ?: $this->table;

        if (is_null($tenant)) {
            throw new TenantNotFoundException();
        }

        return "user_{$tenant}_{$table}";
    }
}
