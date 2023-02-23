<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 255)->unique();
            $table->string('image', 255)->nullable();
            $table->string('pdf_file',300)->nullable();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('profession',100);
            $table->string('facebook', 300);
            $table->string('twitter', 300);
            $table->string('linkedin', 300);
            $table->string('email', 100);
            $table->string('phone', 20);
            $table->string('po_box', 100);
            $table->text('description');
            $table->text('about');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('teams');
    }
}
