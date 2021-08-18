@extends('layouts.master')
@section('body')

<x-ui.block_space_layout_after_header />
<div class="block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                <div class="card ml-md-3 mr-md-3">
                    <div class="card-body card-body--padding--2">
                        <h1 class="card-title card-title--lg">
                            {{ __('global.Track Order') }}
                        </h1>
                        <p class="mb-4">{{ __('global.Track Order Detail') }}</p>
                        <form action="{{ route('track-order.show') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="track-order-id">{{ __('global.Order ID') }}</label>
                                <input class="form-control" name="number" id="track-order-id" placeholder="" type="text">
                                </input>
                            </div>
                            <div class="form-group">
                                <label for="track-email">
                                    {{ __('global.phoneNumber') }}
                                </label>
                                <input class="form-control" name="phone_number" id="track-email" placeholder="" type="text">
                                </input>
                            </div>
                            <div class="form-group pt-4 mb-1">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    {{ __('global.Track') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<livewire:utils.block-space-before-footer />
@endsection
