@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.compare')" />
    <div class="block">
        <div class="container">
            <div class="compare card">

{{--                <livewire:compare.options />--}}

                <div class="table-responsive">
                    <livewire:compare.table />
                </div>

            </div>
        </div>
    </div>
    <livewire:utils.block-space-before-footer />

@endsection
