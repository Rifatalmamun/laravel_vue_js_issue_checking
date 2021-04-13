<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheckoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkouts', function (Blueprint $table) {
            
            $table->bigIncrements('id');

            $table->string('user_id')->nullable();

            $table->string('b_name')->nullable();
            $table->string('b_phone')->nullable(); 
            $table->string('b_village')->nullable();
            $table->string('b_thana')->nullable();
            $table->string('b_district')->nullable();

            $table->string('s_name')->nullable();
            $table->string('s_phone')->nullable(); 
            $table->string('s_village')->nullable();
            $table->string('s_thana')->nullable();
            $table->string('s_district')->nullable();

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
        Schema::dropIfExists('checkouts');
    }
}
