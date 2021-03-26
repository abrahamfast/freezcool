@extends('layouts.master')

@section('body')
    <livewire:utils.block-header  />

    <div class="block-split">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="product product--layout--full">
                        <div class="product__body">
                            <div class="product__card product__card--one"></div>
                            <div class="product__card product__card--two"></div>

                            <livewire:product-single.product-gallery />
                            <livewire:product-single.product-header />
                            <livewire:product-single.product-main />
                            <livewire:product-single.product-info />
                            <livewire:product-single.product-tabs />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:utils.block-space />
    <livewire:blocks.block-products-carousel />






    <livewire:utils.block-space-before-footer />

@endsection
