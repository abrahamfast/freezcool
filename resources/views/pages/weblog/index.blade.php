@extends('layouts.master')

@section('body')
<livewire:utils.block-header :title="__('global.Latest News')" />

<div class="block blog-view blog-view--layout--list">
    <div class="container">
        <div class="blog-view__body">
            <livewire:blog.posts />
            <livewire:blog.sidebar />
        </div>
    </div>
</div>

<livewire:utils.block-space-before-footer />
@endsection
