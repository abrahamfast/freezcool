@extends('layouts.master')
@section('body')
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--lg">
                    <div class="row">
                        <div class="col-md-6 d-flex">
                            <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">{{ __('global.Enter Otp Code') }}</h3>
                                    <form method="POST" action="{{ route('doLogin') }}">
                                        @csrf
                                        <div class="form-title">
                                            <p class="alert alert-success">{{ __('global.Enter Otp Code detail') }}</p>
                                        </div>
                                        <div class="form-group pos_rel">
                                            <input id="phone[number]" name="code" type="number" placeholder="{{ __('global.code uniqie') }}" class="form-control lgn_input @error('code') is-invalid @enderror"  required="">
                                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                                @error('code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </div>

                                        <button class="btn btn-block btn-primary mt-3" type="submit">{{ __('global.verify code') }}</button>
                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="block-space block-space--layout--before-footer"></div>
@endsection
