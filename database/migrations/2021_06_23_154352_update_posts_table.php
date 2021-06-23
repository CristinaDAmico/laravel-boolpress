<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            // Definizione Colonna
            $table->unsignedBigInteger('category_id')->nullable()->after('slug');

            // Definizione FK
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            // a. rimozione relazione
            $table->dropForeign('posts_category_id_foreign');

            // b. rimozione della colonna 
            $table->dropColumn('category_id');
        });
    }
}
