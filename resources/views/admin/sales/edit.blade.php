@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.sales.title')</h3>
    
    {!! Form::model($sale, ['method' => 'PUT', 'route' => ['admin.sales.update', $sale->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('file_number', trans('global.sales.fields.file-number').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('client', trans('global.sales.fields.client').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('property', trans('global.sales.fields.property').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('city_town_village', trans('global.sales.fields.city-town-village').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('county', trans('global.sales.fields.county').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('buyer', trans('global.sales.fields.buyer').'', ['class' => 'control-label']) !!}
                    {!! Form::text('buyer', old('buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('buyer'))
                        <p class="help-block">
                            {{ $errors->first('buyer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('agent', trans('global.sales.fields.agent').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('buyer_attorney', trans('global.sales.fields.buyer-attorney').'', ['class' => 'control-label']) !!}
                    {!! Form::text('buyer_attorney', old('buyer_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('buyer_attorney'))
                        <p class="help-block">
                            {{ $errors->first('buyer_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rep_agmt', trans('global.sales.fields.rep-agmt').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('approval_letter', trans('global.sales.fields.approval-letter').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('buyer_approval_letter', trans('global.sales.fields.buyer-approval-letter').'', ['class' => 'control-label']) !!}
                    {!! Form::text('buyer_approval_letter', old('buyer_approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('buyer_approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('buyer_approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('search_update', trans('global.sales.fields.search-update').'', ['class' => 'control-label']) !!}
                    {!! Form::text('search_update', old('search_update'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('search_update'))
                        <p class="help-block">
                            {{ $errors->first('search_update') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_update', trans('global.sales.fields.survey-update').'', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_update', old('survey_update'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_update'))
                        <p class="help-block">
                            {{ $errors->first('survey_update') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tax_receipts', trans('global.sales.fields.tax-receipts').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('tax_certificate', trans('global.sales.fields.tax-certificate').'', ['class' => 'control-label']) !!}
                    {!! Form::text('tax_certificate', old('tax_certificate'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tax_certificate'))
                        <p class="help-block">
                            {{ $errors->first('tax_certificate') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sewer_water_compliance', trans('global.sales.fields.sewer-water-compliance').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('proposed_deed', trans('global.sales.fields.proposed-deed').'', ['class' => 'control-label']) !!}
                    {!! Form::text('proposed_deed', old('proposed_deed'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proposed_deed'))
                        <p class="help-block">
                            {{ $errors->first('proposed_deed') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment', trans('global.sales.fields.mortgage-commitment').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('seach_taxes_deed', trans('global.sales.fields.seach-taxes-deed').'', ['class' => 'control-label']) !!}
                    {!! Form::text('seach_taxes_deed', old('seach_taxes_deed'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seach_taxes_deed'))
                        <p class="help-block">
                            {{ $errors->first('seach_taxes_deed') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_payoff_info', trans('global.sales.fields.mortgage-payoff-info').'', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_payoff_info', old('mortgage_payoff_info'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_payoff_info'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_payoff_info') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_from_buyer', trans('global.sales.fields.title-report-from-buyer').'', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_from_buyer', old('title_report_from_buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_from_buyer'))
                        <p class="help-block">
                            {{ $errors->first('title_report_from_buyer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('clsoing_docs_drafted', trans('global.sales.fields.clsoing-docs-drafted').'', ['class' => 'control-label']) !!}
                    {!! Form::text('clsoing_docs_drafted', old('clsoing_docs_drafted'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('clsoing_docs_drafted'))
                        <p class="help-block">
                            {{ $errors->first('clsoing_docs_drafted') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement', trans('global.sales.fields.closing-statement').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement', old('closing_statement'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_to_buyer', trans('global.sales.fields.closing-statement-to-buyer').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_to_buyer', old('closing_statement_to_buyer'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_to_buyer'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_to_buyer') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_date', trans('global.sales.fields.closing-date').'', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_date', old('closing_date'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_date'))
                        <p class="help-block">
                            {{ $errors->first('closing_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', trans('global.sales.fields.notes').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('internal_notes', trans('global.sales.fields.internal-notes').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('rates', trans('global.sales.fields.rates').'', ['class' => 'control-label']) !!}
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
                    {!! Form::label('assigned_to_id', trans('global.sales.fields.assigned-to').'', ['class' => 'control-label']) !!}
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

    {!! Form::submit(trans('global.app_update'), ['class' => 'btn btn-danger']) !!}
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