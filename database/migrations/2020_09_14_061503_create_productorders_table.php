<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productorders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('number');
            $table->string('email',191);
            $table->string('add1');
            $table->string('add2');
            $table->string('city');
            $table->string('zip');
            $table->string('del')->default(0);
            $table->string('app')->default(0);
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
        Schema::dropIfExists('productorders');
    }
}
