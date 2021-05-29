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
                                            <label for="signup-email">{{ __('global.Email address') }}</label>
                                            <input id="signup-email" type="email" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="signup-password">{{ __('global.Password') }}</label>
                                            <input id="signup-password" type="password" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="signup-confirm">{{ __('global.Repeat password') }}</label>
                                            <input id="signup-confirm" type="password" class="form-control" placeholder="">
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
