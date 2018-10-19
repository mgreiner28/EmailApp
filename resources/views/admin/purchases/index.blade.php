@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.purchases.title')</h3>
    @can('purchase_create')
    <p>
        <a href="{{ route('admin.purchases.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
        @if(!is_null(Auth::getUser()->role_id) && config('global.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Purchase.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.purchases.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.purchases.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($purchases) > 0 ? 'datatable' : '' }} @can('purchase_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('purchase_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('global.purchases.fields.file-number')</th>
                        <th>@lang('global.purchases.fields.client')</th>
                        <th>@lang('global.purchases.fields.property')</th>
                        <th>@lang('global.purchases.fields.city-town-village')</th>
                        <th>@lang('global.purchases.fields.county')</th>
                        <th>@lang('global.purchases.fields.seller')</th>
                        <th>@lang('global.purchases.fields.agent')</th>
                        <th>@lang('global.purchases.fields.seller-attorney')</th>
                        <th>@lang('global.purchases.fields.bank-attorney')</th>
                        <th>@lang('global.purchases.fields.rep-agmt')</th>
                        <th>@lang('global.purchases.fields.approval-letter')</th>
                        <th>@lang('global.purchases.fields.seller-approval-letter')</th>
                        <th>@lang('global.purchases.fields.search-update-received')</th>
                        <th>@lang('global.purchases.fields.survey-update-received')</th>
                        <th>@lang('global.purchases.fields.tax-receipts')</th>
                        <th>@lang('global.purchases.fields.sewer-water-compliance')</th>
                        <th>@lang('global.purchases.fields.pina')</th>
                        <th>@lang('global.purchases.fields.proposed-deed-received')</th>
                        <th>@lang('global.purchases.fields.mortgage-commitment')</th>
                        <th>@lang('global.purchases.fields.mc-rate-lock-expiration')</th>
                        <th>@lang('global.purchases.fields.mortgage-commitment-sent-seller')</th>
                        <th>@lang('global.purchases.fields.survey-taxes-deed')</th>
                        <th>@lang('global.purchases.fields.ordered-title-insurance')</th>
                        <th>@lang('global.purchases.fields.title-report-to-seller')</th>
                        <th>@lang('global.purchases.fields.title-report-to-bank')</th>
                        <th>@lang('global.purchases.fields.hoi-binder')</th>
                        <th>@lang('global.purchases.fields.hoi-binder-receipt')</th>
                        <th>@lang('global.purchases.fields.closing-statement-received')</th>
                        <th>@lang('global.purchases.fields.closing-statement-to-bank')</th>
                        <th>@lang('global.purchases.fields.closing')</th>
                        <th>@lang('global.purchases.fields.notes')</th>
                        <th>@lang('global.purchases.fields.internal-notes')</th>
                        <th>@lang('global.purchases.fields.rates')</th>
                        <th>@lang('global.purchases.fields.assigned-to')</th>
                        <th>@lang('global.purchases.fields.created-by')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($purchases) > 0)
                        @foreach ($purchases as $purchase)
                            <tr data-entry-id="{{ $purchase->id }}">
                                @can('purchase_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='file_number'>{{ $purchase->file_number }}</td>
                                <td field-key='client'>{{ $purchase->client }}</td>
                                <td field-key='property'>{{ $purchase->property }}</td>
                                <td field-key='city_town_village'>{{ $purchase->city_town_village }}</td>
                                <td field-key='county'>{{ $purchase->county }}</td>
                                <td field-key='seller'>{{ $purchase->seller }}</td>
                                <td field-key='agent'>{{ $purchase->agent }}</td>
                                <td field-key='seller_attorney'>{{ $purchase->seller_attorney }}</td>
                                <td field-key='bank_attorney'>{{ $purchase->bank_attorney }}</td>
                                <td field-key='rep_agmt'>{{ $purchase->rep_agmt }}</td>
                                <td field-key='approval_letter'>{{ $purchase->approval_letter }}</td>
                                <td field-key='seller_approval_letter'>{{ $purchase->seller_approval_letter }}</td>
                                <td field-key='search_update_received'>{{ $purchase->search_update_received }}</td>
                                <td field-key='survey_update_received'>{{ $purchase->survey_update_received }}</td>
                                <td field-key='tax_receipts'>{{ $purchase->tax_receipts }}</td>
                                <td field-key='sewer_water_compliance'>{{ $purchase->sewer_water_compliance }}</td>
                                <td field-key='pina'>{{ $purchase->pina }}</td>
                                <td field-key='proposed_deed_received'>{{ $purchase->proposed_deed_received }}</td>
                                <td field-key='mortgage_commitment'>{{ $purchase->mortgage_commitment }}</td>
                                <td field-key='mc_rate_lock_expiration'>{{ $purchase->mc_rate_lock_expiration }}</td>
                                <td field-key='mortgage_commitment_sent_seller'>{{ $purchase->mortgage_commitment_sent_seller }}</td>
                                <td field-key='survey_taxes_deed'>{{ $purchase->survey_taxes_deed }}</td>
                                <td field-key='ordered_title_insurance'>{{ $purchase->ordered_title_insurance }}</td>
                                <td field-key='title_report_to_seller'>{{ $purchase->title_report_to_seller }}</td>
                                <td field-key='title_report_to_bank'>{{ $purchase->title_report_to_bank }}</td>
                                <td field-key='hoi_binder'>{{ $purchase->hoi_binder }}</td>
                                <td field-key='hoi_binder_receipt'>{{ $purchase->hoi_binder_receipt }}</td>
                                <td field-key='closing_statement_received'>{{ $purchase->closing_statement_received }}</td>
                                <td field-key='closing_statement_to_bank'>{{ $purchase->closing_statement_to_bank }}</td>
                                <td field-key='closing'>{{ $purchase->closing }}</td>
                                <td field-key='notes'>{!! $purchase->notes !!}</td>
                                <td field-key='internal_notes'>{!! $purchase->internal_notes !!}</td>
                                <td field-key='rates'>{{ $purchase->rates }}</td>
                                <td field-key='assigned_to'>{{ $purchase->assigned_to->name ?? '' }}</td>
                                <td field-key='created_by'>{{ $purchase->created_by->name ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.restore', $purchase->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.perma_del', $purchase->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('purchase_view')
                                    <a href="{{ route('admin.purchases.show',[$purchase->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('purchase_edit')
                                    <a href="{{ route('admin.purchases.edit',[$purchase->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('purchase_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.purchases.destroy', $purchase->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="40">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('purchase_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.purchases.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection