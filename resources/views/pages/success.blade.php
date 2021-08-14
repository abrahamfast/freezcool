@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.Shopping Cart')" />

    <div class="block mb-5">
        <div class="container">
            <div class="cart">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">{{ __('global.Payment Success') }}</h4>
                    <p class="mb-0">{{ __('global.you successfully read this important') }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
