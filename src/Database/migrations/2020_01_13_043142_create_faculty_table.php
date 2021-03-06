<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('coursecode');
            $table->text('overview');
            $table->text('feature')->nullable();
            $table->text('scope')->nullable();
            $table->text('subject')->nullable();
            $table->text('labinfo')->nullable();
            $table->string('fees')->nullable();
            $table->string('duration')->nullable();
            $table->text('fees_structure')->nullable();
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
        Schema::dropIfExists('faculty');
    }
}
