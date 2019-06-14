<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('author_id')->nullable();
            $table->string('title');
            $table->text('excerpt')->nullable();
            $table->longText('body')->nullable();
            $table->string('image')->nullable();
            $table->string('slug');
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
