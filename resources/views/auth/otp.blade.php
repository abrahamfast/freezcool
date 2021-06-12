@extends('layouts.master')
@section('body')
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--lg">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">{{ __('global.Sign In') }}</h3>
                                    <form method="POST" action="{{ route('doLogin') }}">
                                        @csrf
                                        <div class="form-title">
                                            <h6></h6>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input id="phone[number]" name="phone" type="number" placeholder="{{ __('global.phoneNumber enter') }}" class="form-control lgn_input @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" required="">
                                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <button class="btn btn-primary mt-3" type="submit">{{ __('global.Login') }}</button>
                                        <a href="/register" class="btn btn-success mt-3">{{ __('global.Register new') }}</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="block-space block-space--layout--before-footer"></div>
@endsection
