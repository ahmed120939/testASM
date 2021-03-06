<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclamationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reclamations', function (Blueprint $table) {
            $table->id();
            $table->string("desc");
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('typereclamation_id');
            $table->foreign('user_id')
            ->references('id')->on('users')->onDelete('cascade');
            $table->foreign('typereclamation_id')
            ->references('id')->on('typereclamations')->onDelete('cascade');

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
        Schema::dropIfExists('reclamations');
    }
}
