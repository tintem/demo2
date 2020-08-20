<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Table1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('table1', function (Blueprint $t)
		{
			$t->increments('id');
			$t->string('image', 100);
			$t->string('name',100);
			$t->double('price');
			$t->text('description')->nullable;
			$t->boolean('aviable')->default(true);
			$t->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
