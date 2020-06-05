<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoadmapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roadmap', function (Blueprint $table) {
            $table->Increments('ID')->autoIncrement();
            $table->string('startPoint', 500)->collation('utf8_vietnamese_ci');
            $table->string('endPoint', 500)->collation('utf8_vietnamese_ci');
            $table->string('startTime', 255)->nullable();
            $table->integer('distance')->nullable();
            $table->decimal('price', 8, 2)->nullable();
            $table->string('vehicle', 250)->collation('utf8_vietnamese_ci')->nullable();
            $table->string('howPrice', 250)->collation('utf8_vietnamese_ci')->nullable();
            $table->string('tranportation', 250)->collation('utf8_vietnamese_ci')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::table('roadmap', function (Blueprint $table) {
            $table->string('startTime', 255)->nullable();
        });
        Schema::dropIfExists('roadmap');
    }
}
