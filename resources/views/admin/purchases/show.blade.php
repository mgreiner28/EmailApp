@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.purchases.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.purchases.fields.file-number')</th>
                            <td field-key='file_number'>{{ $purchase->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.client')</th>
                            <td field-key='client'>{{ $purchase->client }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.property')</th>
                            <td field-key='property'>{{ $purchase->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.city-town-village')</th>
                            <td field-key='city_town_village'>{{ $purchase->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.county')</th>
                            <td field-key='county'>{{ $purchase->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.seller')</th>
                            <td field-key='seller'>{{ $purchase->seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.agent')</th>
                            <td field-key='agent'>{{ $purchase->agent }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.seller-attorney')</th>
                            <td field-key='seller_attorney'>{{ $purchase->seller_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.bank-attorney')</th>
                            <td field-key='bank_attorney'>{{ $purchase->bank_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.rep-agmt')</th>
                            <td field-key='rep_agmt'>{{ $purchase->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.approval-letter')</th>
                            <td field-key='approval_letter'>{{ $purchase->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.seller-approval-letter')</th>
                            <td field-key='seller_approval_letter'>{{ $purchase->seller_approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.search-update-received')</th>
                            <td field-key='search_update_received'>{{ $purchase->search_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.survey-update-received')</th>
                            <td field-key='survey_update_received'>{{ $purchase->survey_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.tax-receipts')</th>
                            <td field-key='tax_receipts'>{{ $purchase->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.sewer-water-compliance')</th>
                            <td field-key='sewer_water_compliance'>{{ $purchase->sewer_water_compliance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.pina')</th>
                            <td field-key='pina'>{{ $purchase->pina }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.proposed-deed-received')</th>
                            <td field-key='proposed_deed_received'>{{ $purchase->proposed_deed_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.mortgage-commitment')</th>
                            <td field-key='mortgage_commitment'>{{ $purchase->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.mc-rate-lock-expiration')</th>
                            <td field-key='mc_rate_lock_expiration'>{{ $purchase->mc_rate_lock_expiration }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.mortgage-commitment-sent-seller')</th>
                            <td field-key='mortgage_commitment_sent_seller'>{{ $purchase->mortgage_commitment_sent_seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.survey-taxes-deed')</th>
                            <td field-key='survey_taxes_deed'>{{ $purchase->survey_taxes_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.ordered-title-insurance')</th>
                            <td field-key='ordered_title_insurance'>{{ $purchase->ordered_title_insurance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.title-report-to-seller')</th>
                            <td field-key='title_report_to_seller'>{{ $purchase->title_report_to_seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.title-report-to-bank')</th>
                            <td field-key='title_report_to_bank'>{{ $purchase->title_report_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.hoi-binder')</th>
                            <td field-key='hoi_binder'>{{ $purchase->hoi_binder }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.hoi-binder-receipt')</th>
                            <td field-key='hoi_binder_receipt'>{{ $purchase->hoi_binder_receipt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.closing-statement-received')</th>
                            <td field-key='closing_statement_received'>{{ $purchase->closing_statement_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.closing-statement-to-bank')</th>
                            <td field-key='closing_statement_to_bank'>{{ $purchase->closing_statement_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.closing')</th>
                            <td field-key='closing'>{{ $purchase->closing }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.notes')</th>
                            <td field-key='notes'>{!! $purchase->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.internal-notes')</th>
                            <td field-key='internal_notes'>{!! $purchase->internal_notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.rates')</th>
                            <td field-key='rates'>{{ $purchase->rates }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.assigned-to')</th>
                            <td field-key='assigned_to'>{{ $purchase->assigned_to->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.purchases.fields.created-by')</th>
                            <td field-key='created_by'>{{ $purchase->created_by->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.purchases.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop

@section('javascript')
    @parent
    <script src="//cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
    <script>
        $('.editor').each(function () {
                  CKEDITOR.replace($(this).attr('id'),{
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
        });
    </script>

@stop
