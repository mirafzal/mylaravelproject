<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeCategoryIdToUnsignedBigIntAndAddForeignKeyInProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
//            $table->unsignedBigInteger('category_id')->change();
//
//            $table->foreign('category_id')
//                ->references('id')
//                ->on('categories')
//                ->cascadeOnDelete()
//            ;

//            $table->foreignId('category_id')
//                ->constrained()
//                ->cascadeOnDelete();
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

        });
    }
}
