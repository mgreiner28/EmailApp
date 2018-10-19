<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1538922676SalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('sales')) {
            Schema::create('sales', function (Blueprint $table) {
                $table->increments('id');
                $table->string('file_number')->nullable();
                $table->string('client')->nullable();
                $table->string('property')->nullable();
                $table->string('city_town_village')->nullable();
                $table->string('county')->nullable();
                $table->string('buyer')->nullable();
                $table->string('agent')->nullable();
                $table->string('buyer_attorney')->nullable();
                $table->string('rep_agmt')->nullable();
                $table->string('approval_letter')->nullable();
                $table->string('buyer_approval_letter')->nullable();
                $table->string('search_update')->nullable();
                $table->string('survey_update')->nullable();
                $table->string('tax_receipts')->nullable();
                $table->string('tax_certificate')->nullable();
                $table->string('sewer_water_compliance')->nullable();
                $table->string('proposed_deed')->nullable();
                $table->string('mortgage_commitment')->nullable();
                $table->string('seach_taxes_deed')->nullable();
                $table->string('mortgage_payoff_info')->nullable();
                $table->string('title_report_from_buyer')->nullable();
                $table->string('clsoing_docs_drafted')->nullable();
                $table->string('closing_statement')->nullable();
                $table->string('closing_statement_to_buyer')->nullable();
                $table->string('closing_date')->nullable();
                $table->text('notes')->nullable();
                $table->text('internal_notes')->nullable();
                $table->string('rates')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
