<?php 

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('temperatura');
            $table->string('humedadAire');
            $table->string('humedadTierra');
            $table->string('fechaDato');
            $table->unsignedInteger('caja_id');
            $table->timestamps();
             $table->foreign('caja_id')
      ->references('id')->on('caja')
      ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planta');
    }
}
