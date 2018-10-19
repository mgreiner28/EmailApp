@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.sales.title')</h3>
    @can('sale_create')
    <p>
        <a href="{{ route('admin.sales.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        
        @if(!is_null(Auth::getUser()->role_id) && config('global.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Sale.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.sales.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.sales.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($sales) > 0 ? 'datatable' : '' }} @can('sale_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('sale_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('global.sales.fields.file-number')</th>
                        <th>@lang('global.sales.fields.client')</th>
                        <th>@lang('global.sales.fields.property')</th>
                        <th>@lang('global.sales.fields.city-town-village')</th>
                        <th>@lang('global.sales.fields.county')</th>
                        <th>@lang('global.sales.fields.buyer')</th>
                        <th>@lang('global.sales.fields.agent')</th>
                        <th>@lang('global.sales.fields.buyer-attorney')</th>
                        <th>@lang('global.sales.fields.rep-agmt')</th>
                        <th>@lang('global.sales.fields.approval-letter')</th>
                        <th>@lang('global.sales.fields.buyer-approval-letter')</th>
                        <th>@lang('global.sales.fields.search-update')</th>
                        <th>@lang('global.sales.fields.survey-update')</th>
                        <th>@lang('global.sales.fields.tax-receipts')</th>
                        <th>@lang('global.sales.fields.tax-certificate')</th>
                        <th>@lang('global.sales.fields.sewer-water-compliance')</th>
                        <th>@lang('global.sales.fields.proposed-deed')</th>
                        <th>@lang('global.sales.fields.mortgage-commitment')</th>
                        <th>@lang('global.sales.fields.seach-taxes-deed')</th>
                        <th>@lang('global.sales.fields.mortgage-payoff-info')</th>
                        <th>@lang('global.sales.fields.title-report-from-buyer')</th>
                        <th>@lang('global.sales.fields.clsoing-docs-drafted')</th>
                        <th>@lang('global.sales.fields.closing-statement')</th>
                        <th>@lang('global.sales.fields.closing-statement-to-buyer')</th>
                        <th>@lang('global.sales.fields.closing-date')</th>
                        <th>@lang('global.sales.fields.notes')</th>
                        <th>@lang('global.sales.fields.internal-notes')</th>
                        <th>@lang('global.sales.fields.rates')</th>
                        <th>@lang('global.sales.fields.assigned-to')</th>
                        <th>@lang('global.sales.fields.created-by')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($sales) > 0)
                        @foreach ($sales as $sale)
                            <tr data-entry-id="{{ $sale->id }}">
                                @can('sale_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='file_number'>{{ $sale->file_number }}</td>
                                <td field-key='client'>{{ $sale->client }}</td>
                                <td field-key='property'>{{ $sale->property }}</td>
                                <td field-key='city_town_village'>{{ $sale->city_town_village }}</td>
                                <td field-key='county'>{{ $sale->county }}</td>
                                <td field-key='buyer'>{{ $sale->buyer }}</td>
                                <td field-key='agent'>{{ $sale->agent }}</td>
                                <td field-key='buyer_attorney'>{{ $sale->buyer_attorney }}</td>
                                <td field-key='rep_agmt'>{{ $sale->rep_agmt }}</td>
                                <td field-key='approval_letter'>{{ $sale->approval_letter }}</td>
                                <td field-key='buyer_approval_letter'>{{ $sale->buyer_approval_letter }}</td>
                                <td field-key='search_update'>{{ $sale->search_update }}</td>
                                <td field-key='survey_update'>{{ $sale->survey_update }}</td>
                                <td field-key='tax_receipts'>{{ $sale->tax_receipts }}</td>
                                <td field-key='tax_certificate'>{{ $sale->tax_certificate }}</td>
                                <td field-key='sewer_water_compliance'>{{ $sale->sewer_water_compliance }}</td>
                                <td field-key='proposed_deed'>{{ $sale->proposed_deed }}</td>
                                <td field-key='mortgage_commitment'>{{ $sale->mortgage_commitment }}</td>
                                <td field-key='seach_taxes_deed'>{{ $sale->seach_taxes_deed }}</td>
                                <td field-key='mortgage_payoff_info'>{{ $sale->mortgage_payoff_info }}</td>
                                <td field-key='title_report_from_buyer'>{{ $sale->title_report_from_buyer }}</td>
                                <td field-key='clsoing_docs_drafted'>{{ $sale->clsoing_docs_drafted }}</td>
                                <td field-key='closing_statement'>{{ $sale->closing_statement }}</td>
                                <td field-key='closing_statement_to_buyer'>{{ $sale->closing_statement_to_buyer }}</td>
                                <td field-key='closing_date'>{{ $sale->closing_date }}</td>
                                <td field-key='notes'>{!! $sale->notes !!}</td>
                                <td field-key='internal_notes'>{!! $sale->internal_notes !!}</td>
                                <td field-key='rates'>{{ $sale->rates }}</td>
                                <td field-key='assigned_to'>{{ $sale->assigned_to->name ?? '' }}</td>
                                <td field-key='created_by'>{{ $sale->created_by->name ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.restore', $sale->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.perma_del', $sale->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('sale_view')
                                    <a href="{{ route('admin.sales.show',[$sale->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('sale_edit')
                                    <a href="{{ route('admin.sales.edit',[$sale->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('sale_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.sales.destroy', $sale->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="35">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('sale_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.sales.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection