@extends('layouts.master')
@section('body')
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            @include('partials.account-nav')
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                                @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
@endsection
