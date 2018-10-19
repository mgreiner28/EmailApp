<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5bbcfc3e011b5RelationshipsToPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function(Blueprint $table) {
            if (!Schema::hasColumn('purchases', 'assigned_to_id')) {
                $table->integer('assigned_to_id')->unsigned()->nullable();
                $table->foreign('assigned_to_id', '216308_5bba186224936')->references('id')->on('users')->onDelete('cascade');
                }
                if (!Schema::hasColumn('purchases', 'created_by_id')) {
                $table->integer('created_by_id')->unsigned()->nullable();
                $table->foreign('created_by_id', '216308_5bba1823e38e3')->references('id')->on('users')->onDelete('cascade');
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
        Schema::table('purchases', function(Blueprint $table) {
            if(Schema::hasColumn('purchases', 'assigned_to_id')) {
                $table->dropForeign('216308_5bba186224936');
                $table->dropIndex('216308_5bba186224936');
                $table->dropColumn('assigned_to_id');
            }
            if(Schema::hasColumn('purchases', 'created_by_id')) {
                $table->dropForeign('216308_5bba1823e38e3');
                $table->dropIndex('216308_5bba1823e38e3');
                $table->dropColumn('created_by_id');
            }
            
        });
    }
}
