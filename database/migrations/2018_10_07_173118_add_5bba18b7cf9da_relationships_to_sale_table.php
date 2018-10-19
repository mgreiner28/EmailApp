<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5bba18b7cf9daRelationshipsToSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sales', function(Blueprint $table) {
            if (!Schema::hasColumn('sales', 'assigned_to_id')) {
                $table->integer('assigned_to_id')->unsigned()->nullable();
                $table->foreign('assigned_to_id', '216310_5bba18b5f0175')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('sales', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '216310_5bba18b612e77')->references('id')->on('users')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sales', function(Blueprint $table) {
            
        });
    }
}
