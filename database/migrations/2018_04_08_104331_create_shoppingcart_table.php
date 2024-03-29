<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingcartTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
       if(!Schema::hasTable(config('cart.database.table'))){ 
        Schema::create(config('cart.database.table'), function (Blueprint $table) {
            $table->string('identifier',250);
            $table->string('instance',250);
            $table->longText('content');
            $table->nullableTimestamps();
            $table->primary(['identifier', 'instance']);
        });
       }
    }
    /**
     * Reverse the migrations.
     */
    public function down() {
        Schema::drop(config('cart.database.table'));
    }
}
