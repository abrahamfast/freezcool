@extends('layouts.account')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>{{ __('global.Edit Profile') }}</h5>
    </div>
    <div class="card-divider"></div>
    <div class="card-body card-body--padding--2">
        <div class="row no-gutters">
            <div class="col-12 col-lg-7 col-xl-6">
                <form action="{{ route('profile.save') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="profile-first-name">{{ __('global.First Name') }}</label>
                    <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="profile-first-name" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="profile-email">{{ __('global.Email Address') }}</label>
                    <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="profile-email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="profile-phone">{{ __('global.Phone Number') }}</label>
                    <input name="phone" value="{{ $user->phone }}" type="text" class="form-control" id="profile-phone" placeholder="">
                </div>
                <div class="form-group">
                    <label for="shipping_address_country">{{ __('global.shipping_address_country') }}</label>
                    <input name="shipping_address_country" value="{{ $user->shipping_address_country }}" type="text" class="form-control" id="shipping_address_country" placeholder="">
                </div>
                <div class="form-group">
                    <label for="shipping_address_city">{{ __('global.shipping_address_city') }}</label>
                    <input name="shipping_address_city" value="{{ $user->shipping_address_city }}" type="text" class="form-control" id="shipping_address_city" placeholder="">
                </div>
                <div class="form-group">
                    <label for="shipping_address_state">{{ __('global.shipping_address_state') }}</label>
                    <input name="shipping_address_state" value="{{ $user->shipping_address_state }}" type="text" class="form-control" id="shipping_address_state" placeholder="">
                </div>
                <div class="form-group">
                    <label for="shipping_address_street">{{ __('global.shipping_address_street') }}</label>
                    <input name="shipping_address_street" value="{{ $user->shipping_address_street }}" type="text" class="form-control" id="shipping_address_street" placeholder="">
                </div>
                <div class="form-group">
                    <label for="shipping_address_postal_code">{{ __('global.shipping_address_postal_code') }}</label>
                    <input name="shipping_address_postal_code" value="{{ $user->shipping_address_postal_code }}" type="text" class="form-control" id="shipping_address_postal_code" placeholder="">
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary mt-3">{{ __('global.Save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
