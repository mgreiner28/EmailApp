@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.sales.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.sales.fields.file-number')</th>
                            <td field-key='file_number'>{{ $sale->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.client')</th>
                            <td field-key='client'>{{ $sale->client }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.property')</th>
                            <td field-key='property'>{{ $sale->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.city-town-village')</th>
                            <td field-key='city_town_village'>{{ $sale->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.county')</th>
                            <td field-key='county'>{{ $sale->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.buyer')</th>
                            <td field-key='buyer'>{{ $sale->buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.agent')</th>
                            <td field-key='agent'>{{ $sale->agent }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.buyer-attorney')</th>
                            <td field-key='buyer_attorney'>{{ $sale->buyer_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.rep-agmt')</th>
                            <td field-key='rep_agmt'>{{ $sale->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.approval-letter')</th>
                            <td field-key='approval_letter'>{{ $sale->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.buyer-approval-letter')</th>
                            <td field-key='buyer_approval_letter'>{{ $sale->buyer_approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.search-update')</th>
                            <td field-key='search_update'>{{ $sale->search_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.survey-update')</th>
                            <td field-key='survey_update'>{{ $sale->survey_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.tax-receipts')</th>
                            <td field-key='tax_receipts'>{{ $sale->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.tax-certificate')</th>
                            <td field-key='tax_certificate'>{{ $sale->tax_certificate }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.sewer-water-compliance')</th>
                            <td field-key='sewer_water_compliance'>{{ $sale->sewer_water_compliance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.proposed-deed')</th>
                            <td field-key='proposed_deed'>{{ $sale->proposed_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.mortgage-commitment')</th>
                            <td field-key='mortgage_commitment'>{{ $sale->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.seach-taxes-deed')</th>
                            <td field-key='seach_taxes_deed'>{{ $sale->seach_taxes_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.mortgage-payoff-info')</th>
                            <td field-key='mortgage_payoff_info'>{{ $sale->mortgage_payoff_info }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.title-report-from-buyer')</th>
                            <td field-key='title_report_from_buyer'>{{ $sale->title_report_from_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.clsoing-docs-drafted')</th>
                            <td field-key='clsoing_docs_drafted'>{{ $sale->clsoing_docs_drafted }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.closing-statement')</th>
                            <td field-key='closing_statement'>{{ $sale->closing_statement }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.closing-statement-to-buyer')</th>
                            <td field-key='closing_statement_to_buyer'>{{ $sale->closing_statement_to_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.closing-date')</th>
                            <td field-key='closing_date'>{{ $sale->closing_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.notes')</th>
                            <td field-key='notes'>{!! $sale->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.internal-notes')</th>
                            <td field-key='internal_notes'>{!! $sale->internal_notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.rates')</th>
                            <td field-key='rates'>{{ $sale->rates }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.assigned-to')</th>
                            <td field-key='assigned_to'>{{ $sale->assigned_to->name ?? '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.sales.fields.created-by')</th>
                            <td field-key='created_by'>{{ $sale->created_by->name ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.sales.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
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
