@extends('layouts.master')
@section('body')
<div class="block-space block-space--layout--after-header"></div>
<div class="block">
    <div class="container container--max--lg">
        <div class="row">
            <div class="col-md-6 d-flex mt-4 mt-md-0">
                <div class="card flex-grow-1 mb-0 ml-0 ml-lg-3 mr-0 mr-lg-4">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title">{{ __('global.Register') }}</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <label for="signup-name">{{ __('global.full name') }}</label>
                                <input name="name" required id="signup-name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="signup-email">{{ __('global.Email address') }}</label>
                                <input name="email" required id="signup-email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signup-password">{{ __('global.Password') }}</label>
                                <input name="password" id="signup-password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signup-confirm">{{ __('global.Repeat password') }}</label>
                                <input name="password_confirmation" id="signup-confirm"  required type="password" class="form-control" placeholder="">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary mt-3">{{ __('global.Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
@endsection
