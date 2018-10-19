@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.users.fields.name')</th>
                            <td field-key='name'>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.phone-number')</th>
                            <td field-key='phone_number'>{{ $user->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.email')</th>
                            <td field-key='email'>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.users.fields.role')</th>
                            <td field-key='role'>
                                @foreach ($user->role as $singleRole)
                                    <span class="label label-info label-many">{{ $singleRole->title }}</span>
                                @endforeach
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#internal_notifications" aria-controls="internal_notifications" role="tab" data-toggle="tab">Notifications</a></li>
<li role="presentation" class=""><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>
<li role="presentation" class=""><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>
<li role="presentation" class=""><a href="#purchases" aria-controls="purchases" role="tab" data-toggle="tab">Purchases</a></li>
<li role="presentation" class=""><a href="#purchases" aria-controls="purchases" role="tab" data-toggle="tab">Purchases</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="internal_notifications">
<table class="table table-bordered table-striped {{ count($internal_notifications) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('global.internal-notifications.fields.text')</th>
                        <th>@lang('global.internal-notifications.fields.link')</th>
                        <th>@lang('global.internal-notifications.fields.users')</th>
                                                <th>&nbsp;</th>

        </tr>
    </thead>

    <tbody>
        @if (count($internal_notifications) > 0)
            @foreach ($internal_notifications as $internal_notification)
                <tr data-entry-id="{{ $internal_notification->id }}">
                    <td field-key='text'>{{ $internal_notification->text }}</td>
                                <td field-key='link'>{{ $internal_notification->link }}</td>
                                <td field-key='users'>
                                    @foreach ($internal_notification->users as $singleUsers)
                                        <span class="label label-info label-many">{{ $singleUsers->name }}</span>
                                    @endforeach
                                </td>
                                                                <td>
                                    @can('internal_notification_view')
                                    <a href="{{ route('admin.internal_notifications.show',[$internal_notification->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('internal_notification_edit')
                                    <a href="{{ route('admin.internal_notifications.edit',[$internal_notification->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('internal_notification_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.internal_notifications.destroy', $internal_notification->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="8">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="sales">
<table class="table table-bordered table-striped {{ count($sales) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="sales">
<table class="table table-bordered table-striped {{ count($sales) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="purchases">
<table class="table table-bordered table-striped {{ count($purchases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
<div role="tabpanel" class="tab-pane " id="purchases">
<table class="table table-bordered table-striped {{ count($purchases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


