@extends('layouts.master')

@section('body')

	<livewire:utils.block-header :title="__('global.Shopping Cart')" />
	            <div class="block">
                <div class="container">

                    <div class="cart">
                        <livewire:cart-item />
                        <livewire:cart-total />
                    </div>
                </div>
            </div>
@endsection
