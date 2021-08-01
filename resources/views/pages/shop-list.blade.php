@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.shop_list')" />
    <div class="block-split block-split--has-sidebar">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <livewire:product.sidebar />
                <livewire:product.lists :cate="$categoryId" />
            </div>
        </div>
    </div>
    <livewire:utils.block-space-before-footer />

@endsection

@push('js')
    <script>
        $('.addcartbtn').on('click', function(e){
            e.preventDefault();
            $('.product-form').submit()
        });
    </script>
@endpush
