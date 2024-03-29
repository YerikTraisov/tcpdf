<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner');
            $table->string('type');
            $table->string('hard');
            $table->string('ram');
			$table->string('size');
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
		Schema::drop('computers');
    }
}
