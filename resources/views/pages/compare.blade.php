@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.compare')" />

    <div class="block">
        <div class="container">
            <div class="compare card">
              @if($products)
                <div class="table-responsive">
                    <livewire:compare.table :products="$products"  />
                </div>
              @else
                <h1>{{ __('global.not found') }}</h1>
              @endif
            </div>
        </div>
    </div>

    <livewire:utils.block-space-before-footer />

@endsection
