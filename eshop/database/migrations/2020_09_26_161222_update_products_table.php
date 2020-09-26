<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // nom, prix, image, description, stock, catégorie (clé étrangère)

        Schema::table('products', function (Blueprint $table) {
            $table->string('name');
            $table->decimal('price');
            $table->string('image');
            $table->text('description');
            $table->bigInteger('stock');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropIfExists('products');
        });
    }
}
