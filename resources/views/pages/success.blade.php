@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.Shopping Cart')" />

    <div class="block order-success">
        <div class="container">
            <div class="order-success__body">
                <div class="order-success__header">
                    <div class="order-success__icon">
                        <svg width="100" height="100">
                            <path d="M50,100C22.4,100,0,77.6,0,50S22.4,0,50,0s50,22.4,50,50S77.6,100,50,100z M50,2C23.5,2,2,23.5,2,50
        s21.5,48,48,48s48-21.5,48-48S76.5,2,50,2z M44.2,71L22.3,49.1l1.4-1.4l21.2,21.2l34.4-34.4l1.4,1.4L45.6,71
        C45.2,71.4,44.6,71.4,44.2,71z"></path>
                        </svg>
                    </div>
                    <h1 class="order-success__title">{{ __('global.Thank you') }}</h1>
                    <div class="order-success__subtitle">{{ __('global.Your order has been received') }}</div>
                    <div class="order-success__actions">
                        <a href="/" class="btn btn-sm btn-secondary">{{ __('global.Go To Homepage') }}</a>
                    </div>
                </div>
                <div class="card order-success__meta">
                    <ul class="order-success__meta-list">
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Order Num') }}</span>
                            <span class="order-success__meta-value">{{ $quote->number }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Created At') }}</span>
                            <span class="order-success__meta-value">{{ $quote->created_at }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Total') }}</span>
                            <span class="order-success__meta-value">{{ $quote->amount }}</span>
                        </li>
                    </ul>
                </div>

                <div class="block-space block-space--layout--before-footer"></div>
            </div>
        </div>
    </div>
@endsection
