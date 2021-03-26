@extends('layouts.master')

@section('body')
    <livewire:index.block-finder />
    <livewire:utils.block-space />
    <livewire:index.block-categories />
    <livewire:utils.block-space />
    <livewire:blocks.block-products-carousel />
    <livewire:utils.block-space />
    <livewire:index.block-features />
@endsection
