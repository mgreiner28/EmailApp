<?php

$factory->define(App\Purchase::class, function (Faker\Generator $faker) {
    return [
        "file_number" => $faker->name,
        "client" => $faker->name,
        "property" => $faker->name,
        "city_town_village" => $faker->name,
        "county" => $faker->name,
        "seller" => $faker->name,
        "agent" => $faker->name,
        "seller_attorney" => $faker->name,
        "bank_attorney" => $faker->name,
        "rep_agmt" => $faker->name,
        "approval_letter" => $faker->name,
        "seller_approval_letter" => $faker->name,
        "search_update_received" => $faker->name,
        "survey_update_received" => $faker->name,
        "tax_receipts" => $faker->name,
        "sewer_water_compliance" => $faker->name,
        "pina" => $faker->name,
        "proposed_deed_received" => $faker->name,
        "mortgage_commitment" => $faker->name,
        "mc_rate_lock_expiration" => $faker->name,
        "mortgage_commitment_sent_seller" => $faker->name,
        "survey_taxes_deed" => $faker->name,
        "ordered_title_insurance" => $faker->name,
        "title_report_to_seller" => $faker->name,
        "title_report_to_bank" => $faker->name,
        "hoi_binder" => $faker->name,
        "hoi_binder_receipt" => $faker->name,
        "closing_statement_received" => $faker->name,
        "closing_statement_to_bank" => $faker->name,
        "closing" => $faker->name,
        "notes" => $faker->name,
        "internal_notes" => $faker->name,
        "rates" => $faker->name,
        "assigned_to_id" => factory('App\User')->create(),
        "created_by_id" => factory('App\User')->create(),
    ];
});
