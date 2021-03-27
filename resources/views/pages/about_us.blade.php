@extends('layouts.master')

@section('body')
    <div class="about">
        <div class="about__body">
            <x-about_us.about_image />
            <x-about_us.about_card />
            <x-about_us.about_indicators
        </div>
    </div>
    <x-ui.block_space_layout_divider_xl />
    <x-about_us.block_teammates />
    <x-ui.block_space_layout_divider_xl />
    <x-about_us.testimonials />
    <div class="block-space block-space--layout--before-footer"></div>
    <livewire:utils.block-space-before-footer />
@endsection
