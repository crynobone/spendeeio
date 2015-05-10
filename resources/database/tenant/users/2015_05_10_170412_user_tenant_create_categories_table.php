<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTenantCreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @param  string|int  $id
     *
     * @return void
     */
    public function up($id)
    {
        Schema::create("user_{$id}_categories", function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->json('meta');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @param  string|int  $id
     *
     * @return void
     */
    public function down($id)
    {
        Schema::drop("user_{$id}_categories");
    }
}
