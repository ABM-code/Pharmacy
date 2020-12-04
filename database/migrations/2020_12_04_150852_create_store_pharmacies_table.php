<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('address',500)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('reg_num',255)->nullable();
            $table->integer('phar_id');
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
        Schema::dropIfExists('store_pharmacies');
    }
}
