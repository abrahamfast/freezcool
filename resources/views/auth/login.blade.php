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
                                                      <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-title">
                            <h6></h6>
                        </div>
                        <div class="form-group pos_rel">
                            <input id="phone[number]" name="email" type="text" placeholder="{{ __('global.Email address') }}" class="form-control lgn_input @error('email') is-invalid @enderror"  value="{{ old('email') }}" required="">
                            <i class="uil uil-mobile-android-alt lgn_icon"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group pos_rel">
                            <input id="password1" name="password" type="password" placeholder="{{ __('global.Password') }}" class="form-control lgn_input" required="">
                            <i class="uil uil-padlock lgn_icon"></i>
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group pos_rel">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('global.Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <button class="btn btn-primary mt-3" type="submit">{{ __('global.Login') }}</button>
                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="block-space block-space--layout--before-footer"></div>
@endsection
