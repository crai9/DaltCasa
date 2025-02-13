<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_items', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->text('text');
            $table->text('type');
            $table->text('storage_path');
            $table->text('link');
            $table->text('image_url');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('featured_items');
    }
}
