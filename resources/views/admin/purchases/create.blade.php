@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.purchases.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.purchases.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('file_number', trans('global.purchases.fields.file-number').'', ['class' => 'control-label']) !!}
                    {!! Form::text('file_number', old('file_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('file_number'))
                        <p class="help-block">
                            {{ $errors->first('file_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('client', trans('global.purchases.fields.client').'', ['class' => 'control-label']) !!}
                    {!! Form::text('client', old('client'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client'))
                        <p class="help-block">
                            {{ $errors->first('client') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('property', trans('global.purchases.fields.property').'', ['class' => 'control-label']) !!}
                    {!! Form::text('property', old('property'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('property'))
                        <p class="help-block">
                            {{ $errors->first('property') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city_town_village', trans('global.purchases.fields.city-town-village').'', ['class' => 'control-label']) !!}
                    {!! Form::text('city_town_village', old('city_town_village'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city_town_village'))
                        <p class="help-block">
                            {{ $errors->first('city_town_village') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('county', trans('global.purchases.fields.county').'', ['class' => 'control-label']) !!}
                    {!! Form::text('county', old('county'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('county'))
                        <p class="help-block">
                            {{ $errors->first('county') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller', trans('global.purchases.fields.seller').'', ['class' => 'control-label']) !!}
                    {!! Form::text('seller', old('seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller'))
                        <p class="help-block">
                            {{ $errors->first('seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('agent', trans('global.purchases.fields.agent').'', ['class' => 'control-label']) !!}
                    {!! Form::text('agent', old('agent'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('agent'))
                        <p class="help-block">
                            {{ $errors->first('agent') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_attorney', trans('global.purchases.fields.seller-attorney').'', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_attorney', old('seller_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_attorney'))
                        <p class="help-block">
                            {{ $errors->first('seller_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bank_attorney', trans('global.purchases.fields.bank-attorney').'', ['class' => 'control-label']) !!}
                    {!! Form::text('bank_attorney', old('bank_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bank_attorney'))
                        <p class="help-block">
                            {{ $errors->first('bank_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rep_agmt', trans('global.purchases.fields.rep-agmt').'', ['class' => 'control-label']) !!}
                    {!! Form::text('rep_agmt', old('rep_agmt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rep_agmt'))
                        <p class="help-block">
                            {{ $errors->first('rep_agmt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('approval_letter', trans('global.purchases.fields.approval-letter').'', ['class' => 'control-label']) !!}
                    {!! Form::text('approval_letter', old('approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_approval_letter', trans('global.purchases.fields.seller-approval-letter').'', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_approval_letter', old('seller_approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('seller_approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('search_update_received', trans('global.purchases.fields.search-update-received').'', ['class' => 'control-label']) !!}
                    {!! Form::text('search_update_received', old('search_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('search_update_received'))
                        <p class="help-block">
                            {{ $errors->first('search_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_update_received', trans('global.purchases.fields.survey-update-received').'', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_update_received', old('survey_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_update_received'))
                        <p class="help-block">
                            {{ $errors->first('survey_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tax_receipts', trans('global.purchases.fields.tax-receipts').'', ['class' => 'control-label']) !!}
                    {!! Form::text('tax_receipts', old('tax_receipts'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tax_receipts'))
                        <p class="help-block">
                            {{ $errors->first('tax_receipts') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sewer_water_compliance', trans('global.purchases.fields.sewer-water-compliance').'', ['class' => 'control-label']) !!}
                    {!! Form::text('sewer_water_compliance', old('sewer_water_compliance'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sewer_water_compliance'))
                        <p class="help-block">
                            {{ $errors->first('sewer_water_compliance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pina', trans('global.purchases.fields.pina').'', ['class' => 'control-label']) !!}
                    {!! Form::text('pina', old('pina'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pina'))
                        <p class="help-block">
                            {{ $errors->first('pina') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proposed_deed_received', trans('global.purchases.fields.proposed-deed-received').'', ['class' => 'control-label']) !!}
                    {!! Form::text('proposed_deed_received', old('proposed_deed_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proposed_deed_received'))
                        <p class="help-block">
                            {{ $errors->first('proposed_deed_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment', trans('global.purchases.fields.mortgage-commitment').'', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_commitment', old('mortgage_commitment'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_commitment'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_commitment') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mc_rate_lock_expiration', trans('global.purchases.fields.mc-rate-lock-expiration').'', ['class' => 'control-label']) !!}
                    {!! Form::text('mc_rate_lock_expiration', old('mc_rate_lock_expiration'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mc_rate_lock_expiration'))
                        <p class="help-block">
                            {{ $errors->first('mc_rate_lock_expiration') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment_sent_seller', trans('global.purchases.fields.mortgage-commitment-sent-seller').'', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_commitment_sent_seller', old('mortgage_commitment_sent_seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_commitment_sent_seller'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_commitment_sent_seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_taxes_deed', trans('global.purchases.fields.survey-taxes-deed').'', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_taxes_deed', old('survey_taxes_deed'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_taxes_deed'))
                        <p class="help-block">
                            {{ $errors->first('survey_taxes_deed') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ordered_title_insurance', trans('global.purchases.fields.ordered-title-insurance').'', ['class' => 'control-label']) !!}
                    {!! Form::text('ordered_title_insurance', old('ordered_title_insurance'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ordered_title_insurance'))
                        <p class="help-block">
                            {{ $errors->first('ordered_title_insurance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_seller', trans('global.purchases.fields.title-report-to-seller').'', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_seller', old('title_report_to_seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_seller'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_bank', trans('global.purchases.fields.title-report-to-bank').'', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_bank', old('title_report_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder', trans('global.purchases.fields.hoi-binder').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder', old('hoi_binder'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder_receipt', trans('global.purchases.fields.hoi-binder-receipt').'', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder_receipt', old('hoi_binder_receipt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder_receipt'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder_receipt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_received', trans('global.purchases.fields.closing-statement-received').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_received', old('closing_statement_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_received'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_to_bank', trans('global.purchases.fields.closing-statement-to-bank').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_to_bank', old('closing_statement_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing', trans('global.purchases.fields.closing').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing', old('closing'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing'))
                        <p class="help-block">
                            {{ $errors->first('closing') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', trans('global.purchases.fields.notes').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notes', old('notes'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notes'))
                        <p class="help-block">
                            {{ $errors->first('notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('internal_notes', trans('global.purchases.fields.internal-notes').'', ['class' => 'control-label']) !!}
                    {!! Form::textarea('internal_notes', old('internal_notes'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('internal_notes'))
                        <p class="help-block">
                            {{ $errors->first('internal_notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rates', trans('global.purchases.fields.rates').'', ['class' => 'control-label']) !!}
                    {!! Form::text('rates', old('rates'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rates'))
                        <p class="help-block">
                            {{ $errors->first('rates') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('assigned_to_id', trans('global.purchases.fields.assigned-to').'', ['class' => 'control-label']) !!}
                    {!! Form::select('assigned_to_id', $assigned_tos, old('assigned_to_id'), ['class' => 'form-control select2']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('assigned_to_id'))
                        <p class="help-block">
                            {{ $errors->first('assigned_to_id') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('global.app_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
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