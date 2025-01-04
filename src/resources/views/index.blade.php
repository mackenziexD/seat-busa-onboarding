@extends('web::layouts.grids.12', ['viewname' => 'seat-busa-onboarding::index'])

@section('title', 'Recruitment Guide')
@section('page_header', 'Recruitment Guide')

@section('full')
<style>
    p {
        margin-bottom: 0.5rem !important;
    }
    ul li:last-child {
        margin-bottom: 0.5rem !important;
    }
    ul {
        margin-top: -6px !important;
    }
</style>
<div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
            <h3 class="card-title">Welcome To Blackwater USA Inc.</h3>
        </div>
        <div class="card-body">
            {!! \Illuminate\Support\Str::markdown($content->content ?? '') !!}
        </div>
      </div>

    </div>
</div>
@stop
