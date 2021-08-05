@extends('layouts.master')
@section('body')
<div class="block-space block-space--layout--after-header"></div>
<div class="block">
    <div class="container">
        <div class="card mb-4">
            <div class="card-body card-body--padding--2">
                <h2 class="card-title">{{ __('global.before register') }}</h2>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="{{ route('register') }}?advisor=true" class="btn btn-dark btn-block btn-xl">{{ __('global.advisor register') }}</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="{{ route('register') }}" class="btn btn-primary btn-block btn-xl">{{ __('global.customer register') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="block-space block-space--layout--before-footer"></div>
@endsection
