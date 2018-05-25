<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeseosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deseos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->double('precio', 8, 2);
            $table->text('descripcion')->nullable();
            $table->double('costo', 8, 2);
            $table->double('ahorro', 8, 2);

            // FK
         $table->integer('user_id')->unsigned();
         $table->foreign('user_id')->references('id')->on('users'); 
    
    
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
        Schema::dropIfExists('deseos');
    }
}
