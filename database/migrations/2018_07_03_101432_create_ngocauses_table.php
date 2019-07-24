<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgocausesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngo_causes', function (Blueprint $table) {
            $table->increments('id');
			$table->integer("ngo_tbl_id")->unsigned();
			$table->foreign("ngo_tbl_id")->references("id")->on("ngo_tbl");
			$table->string("image")->nullable();
			$table->string("title");
			$table->text("description")->nullable();
			$table->string('status',2);
			$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ngo_causes');
    }
}
