<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinePharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_pharmacies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255)->nullable();
            $table->string('productio_date',500)->nullable();
            $table->string('expiry_date',255)->nullable();
            $table->string('serial',255)->nullable();
            $table->string('active_substance',255)->nullable();
            $table->string('side_effects',255)->nullable();
            $table->string('manufacturer',255)->nullable();
            $table->string('supplier',255)->nullable();
            $table->integer('price');
            $table->integer('medicine_id');


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
        Schema::dropIfExists('medicine_pharmacies');
    }
}
