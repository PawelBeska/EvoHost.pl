<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('author');
            $table->integer('server')->default(0);
            $table->string('embed')->nullable();
            $table->smallInteger('remote')->default(0);
            $table->text('remote_source')->nullable();
            $table->text('source')->nullable();
            $table->text('poster')->nullable(true);
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('movies');
    }
}
