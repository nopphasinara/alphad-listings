<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('manger_id');
            $table->integer('category_id');// for categories based project like jobs listings
            $table->string('name', 150);
            $table->string('slug', 150)->unique();
            $table->text('description');
            $table->string('location', 50);
            //$table->string('sub-location', 50);
            $table->string('address', 150);
            $table->text('contact');
            // more ...
            // social media profiles
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
        Schema::dropIfExists('companies');
    }
}
