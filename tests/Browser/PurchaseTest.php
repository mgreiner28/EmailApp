<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class PurchaseTest extends DuskTestCase
{

    public function testCreatePurchase()
    {
        $admin = \App\User::find(1);
        $purchase = factory('App\Purchase')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $purchase) {
            $browser->loginAs($admin)
                ->visit(route('admin.purchases.index'))
                ->clickLink('Add new')
                ->type("file_number", $purchase->file_number)
                ->type("client", $purchase->client)
                ->type("property", $purchase->property)
                ->type("city_town_village", $purchase->city_town_village)
                ->type("county", $purchase->county)
                ->type("seller", $purchase->seller)
                ->type("agent", $purchase->agent)
                ->type("seller_attorney", $purchase->seller_attorney)
                ->type("bank_attorney", $purchase->bank_attorney)
                ->type("rep_agmt", $purchase->rep_agmt)
                ->type("approval_letter", $purchase->approval_letter)
                ->type("seller_approval_letter", $purchase->seller_approval_letter)
                ->type("search_update_received", $purchase->search_update_received)
                ->type("survey_update_received", $purchase->survey_update_received)
                ->type("tax_receipts", $purchase->tax_receipts)
                ->type("sewer_water_compliance", $purchase->sewer_water_compliance)
                ->type("pina", $purchase->pina)
                ->type("proposed_deed_received", $purchase->proposed_deed_received)
                ->type("mortgage_commitment", $purchase->mortgage_commitment)
                ->type("mc_rate_lock_expiration", $purchase->mc_rate_lock_expiration)
                ->type("mortgage_commitment_sent_seller", $purchase->mortgage_commitment_sent_seller)
                ->type("survey_taxes_deed", $purchase->survey_taxes_deed)
                ->type("ordered_title_insurance", $purchase->ordered_title_insurance)
                ->type("title_report_to_seller", $purchase->title_report_to_seller)
                ->type("title_report_to_bank", $purchase->title_report_to_bank)
                ->type("hoi_binder", $purchase->hoi_binder)
                ->type("hoi_binder_receipt", $purchase->hoi_binder_receipt)
                ->type("closing_statement_received", $purchase->closing_statement_received)
                ->type("closing_statement_to_bank", $purchase->closing_statement_to_bank)
                ->type("closing", $purchase->closing)
                ->type("notes", $purchase->notes)
                ->type("internal_notes", $purchase->internal_notes)
                ->type("rates", $purchase->rates)
                ->select("assigned_to_id", $purchase->assigned_to_id)
                ->press('Save')
                ->assertRouteIs('admin.purchases.index')
                ->assertSeeIn("tr:last-child td[field-key='file_number']", $purchase->file_number)
                ->assertSeeIn("tr:last-child td[field-key='client']", $purchase->client)
                ->assertSeeIn("tr:last-child td[field-key='property']", $purchase->property)
                ->assertSeeIn("tr:last-child td[field-key='city_town_village']", $purchase->city_town_village)
                ->assertSeeIn("tr:last-child td[field-key='county']", $purchase->county)
                ->assertSeeIn("tr:last-child td[field-key='seller']", $purchase->seller)
                ->assertSeeIn("tr:last-child td[field-key='agent']", $purchase->agent)
                ->assertSeeIn("tr:last-child td[field-key='seller_attorney']", $purchase->seller_attorney)
                ->assertSeeIn("tr:last-child td[field-key='bank_attorney']", $purchase->bank_attorney)
                ->assertSeeIn("tr:last-child td[field-key='rep_agmt']", $purchase->rep_agmt)
                ->assertSeeIn("tr:last-child td[field-key='approval_letter']", $purchase->approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='seller_approval_letter']", $purchase->seller_approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='search_update_received']", $purchase->search_update_received)
                ->assertSeeIn("tr:last-child td[field-key='survey_update_received']", $purchase->survey_update_received)
                ->assertSeeIn("tr:last-child td[field-key='tax_receipts']", $purchase->tax_receipts)
                ->assertSeeIn("tr:last-child td[field-key='sewer_water_compliance']", $purchase->sewer_water_compliance)
                ->assertSeeIn("tr:last-child td[field-key='pina']", $purchase->pina)
                ->assertSeeIn("tr:last-child td[field-key='proposed_deed_received']", $purchase->proposed_deed_received)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment']", $purchase->mortgage_commitment)
                ->assertSeeIn("tr:last-child td[field-key='mc_rate_lock_expiration']", $purchase->mc_rate_lock_expiration)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment_sent_seller']", $purchase->mortgage_commitment_sent_seller)
                ->assertSeeIn("tr:last-child td[field-key='survey_taxes_deed']", $purchase->survey_taxes_deed)
                ->assertSeeIn("tr:last-child td[field-key='ordered_title_insurance']", $purchase->ordered_title_insurance)
                ->assertSeeIn("tr:last-child td[field-key='title_report_to_seller']", $purchase->title_report_to_seller)
                ->assertSeeIn("tr:last-child td[field-key='title_report_to_bank']", $purchase->title_report_to_bank)
                ->assertSeeIn("tr:last-child td[field-key='hoi_binder']", $purchase->hoi_binder)
                ->assertSeeIn("tr:last-child td[field-key='hoi_binder_receipt']", $purchase->hoi_binder_receipt)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_received']", $purchase->closing_statement_received)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_to_bank']", $purchase->closing_statement_to_bank)
                ->assertSeeIn("tr:last-child td[field-key='closing']", $purchase->closing)
                ->assertSeeIn("tr:last-child td[field-key='notes']", $purchase->notes)
                ->assertSeeIn("tr:last-child td[field-key='internal_notes']", $purchase->internal_notes)
                ->assertSeeIn("tr:last-child td[field-key='rates']", $purchase->rates)
                ->assertSeeIn("tr:last-child td[field-key='assigned_to']", $purchase->assigned_to->name)
                ->logout();
        });
    }

    public function testEditPurchase()
    {
        $admin = \App\User::find(1);
        $purchase = factory('App\Purchase')->create();
        $purchase2 = factory('App\Purchase')->make();

        

        $this->browse(function (Browser $browser) use ($admin, $purchase, $purchase2) {
            $browser->loginAs($admin)
                ->visit(route('admin.purchases.index'))
                ->click('tr[data-entry-id="' . $purchase->id . '"] .btn-info')
                ->type("file_number", $purchase2->file_number)
                ->type("client", $purchase2->client)
                ->type("property", $purchase2->property)
                ->type("city_town_village", $purchase2->city_town_village)
                ->type("county", $purchase2->county)
                ->type("seller", $purchase2->seller)
                ->type("agent", $purchase2->agent)
                ->type("seller_attorney", $purchase2->seller_attorney)
                ->type("bank_attorney", $purchase2->bank_attorney)
                ->type("rep_agmt", $purchase2->rep_agmt)
                ->type("approval_letter", $purchase2->approval_letter)
                ->type("seller_approval_letter", $purchase2->seller_approval_letter)
                ->type("search_update_received", $purchase2->search_update_received)
                ->type("survey_update_received", $purchase2->survey_update_received)
                ->type("tax_receipts", $purchase2->tax_receipts)
                ->type("sewer_water_compliance", $purchase2->sewer_water_compliance)
                ->type("pina", $purchase2->pina)
                ->type("proposed_deed_received", $purchase2->proposed_deed_received)
                ->type("mortgage_commitment", $purchase2->mortgage_commitment)
                ->type("mc_rate_lock_expiration", $purchase2->mc_rate_lock_expiration)
                ->type("mortgage_commitment_sent_seller", $purchase2->mortgage_commitment_sent_seller)
                ->type("survey_taxes_deed", $purchase2->survey_taxes_deed)
                ->type("ordered_title_insurance", $purchase2->ordered_title_insurance)
                ->type("title_report_to_seller", $purchase2->title_report_to_seller)
                ->type("title_report_to_bank", $purchase2->title_report_to_bank)
                ->type("hoi_binder", $purchase2->hoi_binder)
                ->type("hoi_binder_receipt", $purchase2->hoi_binder_receipt)
                ->type("closing_statement_received", $purchase2->closing_statement_received)
                ->type("closing_statement_to_bank", $purchase2->closing_statement_to_bank)
                ->type("closing", $purchase2->closing)
                ->type("notes", $purchase2->notes)
                ->type("internal_notes", $purchase2->internal_notes)
                ->type("rates", $purchase2->rates)
                ->select("assigned_to_id", $purchase2->assigned_to_id)
                ->press('Update')
                ->assertRouteIs('admin.purchases.index')
                ->assertSeeIn("tr:last-child td[field-key='file_number']", $purchase2->file_number)
                ->assertSeeIn("tr:last-child td[field-key='client']", $purchase2->client)
                ->assertSeeIn("tr:last-child td[field-key='property']", $purchase2->property)
                ->assertSeeIn("tr:last-child td[field-key='city_town_village']", $purchase2->city_town_village)
                ->assertSeeIn("tr:last-child td[field-key='county']", $purchase2->county)
                ->assertSeeIn("tr:last-child td[field-key='seller']", $purchase2->seller)
                ->assertSeeIn("tr:last-child td[field-key='agent']", $purchase2->agent)
                ->assertSeeIn("tr:last-child td[field-key='seller_attorney']", $purchase2->seller_attorney)
                ->assertSeeIn("tr:last-child td[field-key='bank_attorney']", $purchase2->bank_attorney)
                ->assertSeeIn("tr:last-child td[field-key='rep_agmt']", $purchase2->rep_agmt)
                ->assertSeeIn("tr:last-child td[field-key='approval_letter']", $purchase2->approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='seller_approval_letter']", $purchase2->seller_approval_letter)
                ->assertSeeIn("tr:last-child td[field-key='search_update_received']", $purchase2->search_update_received)
                ->assertSeeIn("tr:last-child td[field-key='survey_update_received']", $purchase2->survey_update_received)
                ->assertSeeIn("tr:last-child td[field-key='tax_receipts']", $purchase2->tax_receipts)
                ->assertSeeIn("tr:last-child td[field-key='sewer_water_compliance']", $purchase2->sewer_water_compliance)
                ->assertSeeIn("tr:last-child td[field-key='pina']", $purchase2->pina)
                ->assertSeeIn("tr:last-child td[field-key='proposed_deed_received']", $purchase2->proposed_deed_received)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment']", $purchase2->mortgage_commitment)
                ->assertSeeIn("tr:last-child td[field-key='mc_rate_lock_expiration']", $purchase2->mc_rate_lock_expiration)
                ->assertSeeIn("tr:last-child td[field-key='mortgage_commitment_sent_seller']", $purchase2->mortgage_commitment_sent_seller)
                ->assertSeeIn("tr:last-child td[field-key='survey_taxes_deed']", $purchase2->survey_taxes_deed)
                ->assertSeeIn("tr:last-child td[field-key='ordered_title_insurance']", $purchase2->ordered_title_insurance)
                ->assertSeeIn("tr:last-child td[field-key='title_report_to_seller']", $purchase2->title_report_to_seller)
                ->assertSeeIn("tr:last-child td[field-key='title_report_to_bank']", $purchase2->title_report_to_bank)
                ->assertSeeIn("tr:last-child td[field-key='hoi_binder']", $purchase2->hoi_binder)
                ->assertSeeIn("tr:last-child td[field-key='hoi_binder_receipt']", $purchase2->hoi_binder_receipt)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_received']", $purchase2->closing_statement_received)
                ->assertSeeIn("tr:last-child td[field-key='closing_statement_to_bank']", $purchase2->closing_statement_to_bank)
                ->assertSeeIn("tr:last-child td[field-key='closing']", $purchase2->closing)
                ->assertSeeIn("tr:last-child td[field-key='notes']", $purchase2->notes)
                ->assertSeeIn("tr:last-child td[field-key='internal_notes']", $purchase2->internal_notes)
                ->assertSeeIn("tr:last-child td[field-key='rates']", $purchase2->rates)
                ->assertSeeIn("tr:last-child td[field-key='assigned_to']", $purchase2->assigned_to->name)
                ->logout();
        });
    }

    public function testShowPurchase()
    {
        $admin = \App\User::find(1);
        $purchase = factory('App\Purchase')->create();

        


        $this->browse(function (Browser $browser) use ($admin, $purchase) {
            $browser->loginAs($admin)
                ->visit(route('admin.purchases.index'))
                ->click('tr[data-entry-id="' . $purchase->id . '"] .btn-primary')
                ->assertSeeIn("td[field-key='file_number']", $purchase->file_number)
                ->assertSeeIn("td[field-key='client']", $purchase->client)
                ->assertSeeIn("td[field-key='property']", $purchase->property)
                ->assertSeeIn("td[field-key='city_town_village']", $purchase->city_town_village)
                ->assertSeeIn("td[field-key='county']", $purchase->county)
                ->assertSeeIn("td[field-key='seller']", $purchase->seller)
                ->assertSeeIn("td[field-key='agent']", $purchase->agent)
                ->assertSeeIn("td[field-key='seller_attorney']", $purchase->seller_attorney)
                ->assertSeeIn("td[field-key='bank_attorney']", $purchase->bank_attorney)
                ->assertSeeIn("td[field-key='rep_agmt']", $purchase->rep_agmt)
                ->assertSeeIn("td[field-key='approval_letter']", $purchase->approval_letter)
                ->assertSeeIn("td[field-key='seller_approval_letter']", $purchase->seller_approval_letter)
                ->assertSeeIn("td[field-key='search_update_received']", $purchase->search_update_received)
                ->assertSeeIn("td[field-key='survey_update_received']", $purchase->survey_update_received)
                ->assertSeeIn("td[field-key='tax_receipts']", $purchase->tax_receipts)
                ->assertSeeIn("td[field-key='sewer_water_compliance']", $purchase->sewer_water_compliance)
                ->assertSeeIn("td[field-key='pina']", $purchase->pina)
                ->assertSeeIn("td[field-key='proposed_deed_received']", $purchase->proposed_deed_received)
                ->assertSeeIn("td[field-key='mortgage_commitment']", $purchase->mortgage_commitment)
                ->assertSeeIn("td[field-key='mc_rate_lock_expiration']", $purchase->mc_rate_lock_expiration)
                ->assertSeeIn("td[field-key='mortgage_commitment_sent_seller']", $purchase->mortgage_commitment_sent_seller)
                ->assertSeeIn("td[field-key='survey_taxes_deed']", $purchase->survey_taxes_deed)
                ->assertSeeIn("td[field-key='ordered_title_insurance']", $purchase->ordered_title_insurance)
                ->assertSeeIn("td[field-key='title_report_to_seller']", $purchase->title_report_to_seller)
                ->assertSeeIn("td[field-key='title_report_to_bank']", $purchase->title_report_to_bank)
                ->assertSeeIn("td[field-key='hoi_binder']", $purchase->hoi_binder)
                ->assertSeeIn("td[field-key='hoi_binder_receipt']", $purchase->hoi_binder_receipt)
                ->assertSeeIn("td[field-key='closing_statement_received']", $purchase->closing_statement_received)
                ->assertSeeIn("td[field-key='closing_statement_to_bank']", $purchase->closing_statement_to_bank)
                ->assertSeeIn("td[field-key='closing']", $purchase->closing)
                ->assertSeeIn("td[field-key='notes']", $purchase->notes)
                ->assertSeeIn("td[field-key='internal_notes']", $purchase->internal_notes)
                ->assertSeeIn("td[field-key='rates']", $purchase->rates)
                ->assertSeeIn("td[field-key='assigned_to']", $purchase->assigned_to->name)
                ->assertSeeIn("td[field-key='created_by']", $purchase->created_by->name)
                ->logout();
        });
    }

}
