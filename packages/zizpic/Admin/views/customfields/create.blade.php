@extends('layouts.master')
@section('content')
<div class="content-wrapper">
    @include('partials.sectionhead')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        {!! Form::model($custom_field, ['route' => ['customFields.store'],'class'=>'form-horizontal']) !!}
                        @include('packages::customfields.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
    </section>
</div>
@stop
