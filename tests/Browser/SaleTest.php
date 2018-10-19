<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class SaleTest extends DuskTestCase
{

    public function testCreateSale()
    {
        $admin = \App\User::find(1);
        $sale = factory('App\Sale')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $sale) {
            $browser->loginAs($admin)
                ->visit(route('admin.sales.index'))
                ->clickLink('Add new')
                ->type("file_number", $sale->file_number)
                ->type("client", $sale->client)
                ->type("property", $sale->property)
                ->type("city_town_village", $sale->city_town_village)
                ->type("county", $sale->county)
                ->type("buyer", $sale->buyer)
                ->type("agent", $sale->agent)
                ->type("buyer_attorney", $sale->buyer_attorney)
                ->type("rep_agmt", $sale->rep_agmt)
                ->type("approval_letter", $sale->approval_letter)
                ->type("buyer_approval_letter", $sale->buyer_approval_letter)
                ->type("search_update", $sale->search_update)
                ->type("survey_update", $sale->survey_update)
                ->type("tax_receipts", $sale->tax_receipts)
                ->type("tax_certificate", $sale->tax_certificate)
                ->type("sewer_water_compliance", $sale->sewer_water_compliance)
                ->type("proposed_deed", $sale->proposed_deed)
                ->type("mortgage_commitment", $sale->mortgage_commitment)
                ->type("seach_taxes_deed", $sale->seach_taxes_deed)
                ->type("mortgage_payoff_info", $sale->mortgage_payoff_info)
                ->type("title_report_from_buyer", $sale->title_report_from_buyer)
                ->type("clsoing_docs_drafted", $sale->clsoing_docs_drafted)
                ->type("closing_statement", $sale->closing_statement)
                ->type("closing_statement_to_buyer", $sale->closing_statement_to_buyer)
                ->type("closing_date", $sale->closing_date)
                ->type("notes", $sale->notes)
                ->type("internal_notes", $sale->internal_notes)
                ->type("rates", $sale->rates)
                ->select("assigned_to_id", $sale->assigned_to_id)
                ->press('Save')
                ->assertRouteIs('admin.sales.index')
                ->assertSeeIn("tr:last-child td[field-key='file_number']", $sale->file_number)
                ->assertSeeIn("tr:last-child td[field-key='client']", $sale->client)
                ->assertSeeIn("tr:last-child td[field-key='property']", $sale->property)
                ->assertSeeIn("tr:last-child td[field-key='city_town_village']", $sale->city_town_village)
                ->assertSeeIn("tr:last-child td[field-key='county']", $sale->county)
                ->assertSeeIn("tr:last-child td[field-key='buyer']", $sale->buyer)
                ->assertSeeIn("tr:last-child td[field-key='agent']", $sale->agent)
                ->assertSeeIn("tr:last-child td[field-key='buyer_attorney']", $sale->buyer_attorney)
                ->assertSeeIn("tr:last-child td[field-key='rep_agmt']", $sale->rep_agmt)
                ->assertSeeIn("tr:last-child td[field-key='approval_letter']", $sale->approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='buyer_approval_letter']", $sale->buyer_approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='search_update']", $sale->search_update)
                ->assertSeeIn("tr:last-child td[field-key='survey_update']", $sale->survey_update)
                ->assertSeeIn("tr:last-child td[field-key='tax_receipts']", $sale->tax_receipts)
                ->assertSeeIn("tr:last-child td[field-key='tax_certificate']", $sale->tax_certificate)
                ->assertSeeIn("tr:last-child td[field-key='sewer_water_compliance']", $sale->sewer_water_compliance)
                ->assertSeeIn("tr:last-child td[field-key='proposed_deed']", $sale->proposed_deed)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment']", $sale->mortgage_commitment)
                ->assertSeeIn("tr:last-child td[field-key='seach_taxes_deed']", $sale->seach_taxes_deed)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_payoff_info']", $sale->mortgage_payoff_info)
                ->assertSeeIn("tr:last-child td[field-key='title_report_from_buyer']", $sale->title_report_from_buyer)
                ->assertSeeIn("tr:last-child td[field-key='clsoing_docs_drafted']", $sale->clsoing_docs_drafted)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement']", $sale->closing_statement)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_to_buyer']", $sale->closing_statement_to_buyer)
                ->assertSeeIn("tr:last-child td[field-key='closing_date']", $sale->closing_date)
                ->assertSeeIn("tr:last-child td[field-key='notes']", $sale->notes)
                ->assertSeeIn("tr:last-child td[field-key='internal_notes']", $sale->internal_notes)
                ->assertSeeIn("tr:last-child td[field-key='rates']", $sale->rates)
                ->assertSeeIn("tr:last-child td[field-key='assigned_to']", $sale->assigned_to->name)
                ->logout();
        });
    }

    public function testEditSale()
    {
        $admin = \App\User::find(1);
        $sale = factory('App\Sale')->create();
        $sale2 = factory('App\Sale')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $sale, $sale2) {
            $browser->loginAs($admin)
                ->visit(route('admin.sales.index'))
                ->click('tr[data-entry-id="' . $sale->id . '"] .btn-info')
                ->type("file_number", $sale2->file_number)
                ->type("client", $sale2->client)
                ->type("property", $sale2->property)
                ->type("city_town_village", $sale2->city_town_village)
                ->type("county", $sale2->county)
                ->type("buyer", $sale2->buyer)
                ->type("agent", $sale2->agent)
                ->type("buyer_attorney", $sale2->buyer_attorney)
                ->type("rep_agmt", $sale2->rep_agmt)
                ->type("approval_letter", $sale2->approval_letter)
                ->type("buyer_approval_letter", $sale2->buyer_approval_letter)
                ->type("search_update", $sale2->search_update)
                ->type("survey_update", $sale2->survey_update)
                ->type("tax_receipts", $sale2->tax_receipts)
                ->type("tax_certificate", $sale2->tax_certificate)
                ->type("sewer_water_compliance", $sale2->sewer_water_compliance)
                ->type("proposed_deed", $sale2->proposed_deed)
                ->type("mortgage_commitment", $sale2->mortgage_commitment)
                ->type("seach_taxes_deed", $sale2->seach_taxes_deed)
                ->type("mortgage_payoff_info", $sale2->mortgage_payoff_info)
                ->type("title_report_from_buyer", $sale2->title_report_from_buyer)
                ->type("clsoing_docs_drafted", $sale2->clsoing_docs_drafted)
                ->type("closing_statement", $sale2->closing_statement)
                ->type("closing_statement_to_buyer", $sale2->closing_statement_to_buyer)
                ->type("closing_date", $sale2->closing_date)
                ->type("notes", $sale2->notes)
                ->type("internal_notes", $sale2->internal_notes)
                ->type("rates", $sale2->rates)
                ->select("assigned_to_id", $sale2->assigned_to_id)
                ->press('Update')
                ->assertRouteIs('admin.sales.index')
                ->assertSeeIn("tr:last-child td[field-key='file_number']", $sale2->file_number)
                ->assertSeeIn("tr:last-child td[field-key='client']", $sale2->client)
                ->assertSeeIn("tr:last-child td[field-key='property']", $sale2->property)
                ->assertSeeIn("tr:last-child td[field-key='city_town_village']", $sale2->city_town_village)
                ->assertSeeIn("tr:last-child td[field-key='county']", $sale2->county)
                ->assertSeeIn("tr:last-child td[field-key='buyer']", $sale2->buyer)
                ->assertSeeIn("tr:last-child td[field-key='agent']", $sale2->agent)
                ->assertSeeIn("tr:last-child td[field-key='buyer_attorney']", $sale2->buyer_attorney)
                ->assertSeeIn("tr:last-child td[field-key='rep_agmt']", $sale2->rep_agmt)
                ->assertSeeIn("tr:last-child td[field-key='approval_letter']", $sale2->approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='buyer_approval_letter']", $sale2->buyer_approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='search_update']", $sale2->search_update)
                ->assertSeeIn("tr:last-child td[field-key='survey_update']", $sale2->survey_update)
                ->assertSeeIn("tr:last-child td[field-key='tax_receipts']", $sale2->tax_receipts)
                ->assertSeeIn("tr:last-child td[field-key='tax_certificate']", $sale2->tax_certificate)
                ->assertSeeIn("tr:last-child td[field-key='sewer_water_compliance']", $sale2->sewer_water_compliance)
                ->assertSeeIn("tr:last-child td[field-key='proposed_deed']", $sale2->proposed_deed)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment']", $sale2->mortgage_commitment)
                ->assertSeeIn("tr:last-child td[field-key='seach_taxes_deed']", $sale2->seach_taxes_deed)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_payoff_info']", $sale2->mortgage_payoff_info)
                ->assertSeeIn("tr:last-child td[field-key='title_report_from_buyer']", $sale2->title_report_from_buyer)
                ->assertSeeIn("tr:last-child td[field-key='clsoing_docs_drafted']", $sale2->clsoing_docs_drafted)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement']", $sale2->closing_statement)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_to_buyer']", $sale2->closing_statement_to_buyer)
                ->assertSeeIn("tr:last-child td[field-key='closing_date']", $sale2->closing_date)
                ->assertSeeIn("tr:last-child td[field-key='notes']", $sale2->notes)
                ->assertSeeIn("tr:last-child td[field-key='internal_notes']", $sale2->internal_notes)
                ->assertSeeIn("tr:last-child td[field-key='rates']", $sale2->rates)
                ->assertSeeIn("tr:last-child td[field-key='assigned_to']", $sale2->assigned_to->name)
                ->logout();
        });
    }

    public function testShowSale()
    {
        $admin = \App\User::find(1);
        $sale = factory('App\Sale')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $sale) {
            $browser->loginAs($admin)
                ->visit(route('admin.sales.index'))
                ->click('tr[data-entry-id="' . $sale->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='file_number']", $sale->file_number)
                ->assertSeeIn("td[field-key='client']", $sale->client)
                ->assertSeeIn("td[field-key='property']", $sale->property)
                ->assertSeeIn("td[field-key='city_town_village']", $sale->city_town_village)
                ->assertSeeIn("td[field-key='county']", $sale->county)
                ->assertSeeIn("td[field-key='buyer']", $sale->buyer)
                ->assertSeeIn("td[field-key='agent']", $sale->agent)
                ->assertSeeIn("td[field-key='buyer_attorney']", $sale->buyer_attorney)
                ->assertSeeIn("td[field-key='rep_agmt']", $sale->rep_agmt)
                ->assertSeeIn("td[field-key='approval_letter']", $sale->approval_letter)
                ->assertSeeIn("td[field-key='buyer_approval_letter']", $sale->buyer_approval_letter)
                ->assertSeeIn("td[field-key='search_update']", $sale->search_update)
                ->assertSeeIn("td[field-key='survey_update']", $sale->survey_update)
                ->assertSeeIn("td[field-key='tax_receipts']", $sale->tax_receipts)
                ->assertSeeIn("td[field-key='tax_certificate']", $sale->tax_certificate)
                ->assertSeeIn("td[field-key='sewer_water_compliance']", $sale->sewer_water_compliance)
                ->assertSeeIn("td[field-key='proposed_deed']", $sale->proposed_deed)
                ->assertSeeIn("td[field-key='mortgage_commitment']", $sale->mortgage_commitment)
                ->assertSeeIn("td[field-key='seach_taxes_deed']", $sale->seach_taxes_deed)
                ->assertSeeIn("td[field-key='mortgage_payoff_info']", $sale->mortgage_payoff_info)
                ->assertSeeIn("td[field-key='title_report_from_buyer']", $sale->title_report_from_buyer)
                ->assertSeeIn("td[field-key='clsoing_docs_drafted']", $sale->clsoing_docs_drafted)
                ->assertSeeIn("td[field-key='closing_statement']", $sale->closing_statement)
                ->assertSeeIn("td[field-key='closing_statement_to_buyer']", $sale->closing_statement_to_buyer)
                ->assertSeeIn("td[field-key='closing_date']", $sale->closing_date)
                ->assertSeeIn("td[field-key='notes']", $sale->notes)
                ->assertSeeIn("td[field-key='internal_notes']", $sale->internal_notes)
                ->assertSeeIn("td[field-key='rates']", $sale->rates)
                ->assertSeeIn("td[field-key='assigned_to']", $sale->assigned_to->name)
                ->assertSeeIn("td[field-key='created_by']", $sale->created_by->name)
                ->logout();
        });
    }

}
