<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id');
            $table->integer('category_id');
            $table->string('title', 75);
            $table->text('description');
            $table->text('extra')->nullable();
            $table->text('notes')->nullable();
            $table->integer('value'); // if appropriate
            $table->string('attr_one', 75);
            $table->string('attr_two', 75);
            //...
            // don't go for separate attributes table unless you really need one
            // using same table to store listing's general attributes is good idea
            // consider using separate table and oneToMany relationship if
            // your listings have unique attributes cant be generalized and grouped

            // more
            //$table->integer('last_value')->nullable(); // if appropriate
            //$table->boolean('show')->default(true); // if appropriate
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
        Schema::dropIfExists('listings');
    }
}
