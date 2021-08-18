@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.Shopping Cart')" />
    <div class="block mb-5">
        <div class="container">
            <div class="cart">
                <livewire:cart-item />
                <livewire:cart-total />
            </div>
        </div>
    </div>
@endsection
