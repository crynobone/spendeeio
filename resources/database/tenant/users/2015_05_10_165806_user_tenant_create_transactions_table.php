<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserTenantCreateTransactionsTable extends Migration
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
        Schema::create("user_{$id}_transactions", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('category_id')->nullable()->index();

            $table->date('date');
            $table->text('note');
            $table->decimal('amount', 10, 2);
            $table->json('meta')->nullable();

            $table->timestamps();
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
        Schema::drop("user_{$id}_transactions");
    }
}
