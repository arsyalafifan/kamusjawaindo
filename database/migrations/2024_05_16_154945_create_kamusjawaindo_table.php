<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKamusjawaindoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kamusjawaindo', function (Blueprint $table) {
            $table->id('kamusid');
            $table->string('indonesia');
            $table->string('jawa');
            $table->string('opadd', 50)->nullable();
            $table->string('pcadd', 20)->nullable();
            $table->timestamp('tgladd');
            $table->string('opedit', 50)->nullable();
            $table->string('pcedit', 20)->nullable();
            $table->timestamp('tgledit');
            $table->boolean('dlt')->default('0')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kamusjawaindo');
    }
}
