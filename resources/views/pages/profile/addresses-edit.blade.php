@extends('layouts.account')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>{{ __('global.Add or update New Address') }}</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-body card-body--padding--2">
            <div class="row no-gutters">
                <div class="col-12 col-lg-10 col-xl-8">
                    <form action="{{ route('account-address.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="address-first-name">{{ __('global.First Name') }}</label>
                                <input type="text" class="form-control" name="first_name" value="{{ $contact->first_name }}" id="address-first-name" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="address-last-name">{{ __('global.Last Name') }}</label>
                                <input type="text" class="form-control" name="last_name" value="{{ $contact->last_name }}" id="address-last-name" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address-company-name">{{ __('global.Company') }} <span class="text-muted">{{ __('global.Optional') }}</span></label>
                            <input type="text" class="form-control" name="account_name" value="{{ $contact->account_name }}" id="address-company-name" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address-country">{{ __('global.Country') }}</label>
                            <select id="address-country" class="form-control" name="address_country" value="{{ $contact->address_country }}">
                                <option value="">{{ __('global.Select a country...') }}</option>
                                <option value="IR">ایران</option>
                                <option value="DE">آلمان</option>
                                <option value="FR">فرانسه</option>
                                <option value="IT">ایتالیا</option>
                                <option value="RU">روسیه</option>
                                <option value="UA">عراق</option>
                                <option value="UK">ترکیه</option>
                                <option value="UAM">امارات</option>
                                <option value="USR">کویت</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address-address1">{{ __('global.Street Address') }}</label>
                            <input type="text" class="form-control" id="address-address1" name="address_street" value="{{ $contact->address_street }}" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address-city">{{ __('global.City') }}</label>
                            <input type="text" class="form-control" name="address_city" value="{{ $contact->address_city }}" id="address-city" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address-state">{{ __('global.State') }}</label>
                            <input type="text" class="form-control" name="address_state" value="{{ $contact->address_state }}" id="address-state" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="address-postcode">{{ __('global.Postcode') }}</label>
                            <input type="text" class="form-control" name="address_postal_code" value="{{ $contact->address_postal_code }}" id="address-postcode" placeholder="">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 mb-0">
                                <label for="address-email">{{ __('global.Edit Address') }}</label>
                                <input type="email" class="form-control" id="address-email" name="email" value="{{ $contact->email }}" placeholder="info@example.com">
                            </div>
                            <div class="form-group col-md-6 mb-0">
                                <label for="address-phone">{{ __('global.Phone Number') }}</label>
                                <input type="text" class="form-control" id="address-phone" name="phone_number" value="{{ $contact->phone_number }}" placeholder="9891297979797">
                            </div>
                        </div>
{{--                        <div class="form-group mt-3">--}}
{{--                            <div class="form-check">--}}
{{--                                <span class="input-check form-check-input">--}}
{{--                                    <span class="input-check__body">--}}
{{--                                        <input class="input-check__input" type="checkbox" name="default-address" id="default-address">--}}
{{--                                        <span class="input-check__box"></span>--}}
{{--                                        <span class="input-check__icon"><svg width="9px" height="7px">--}}
{{--                                                <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />--}}
{{--                                            </svg>--}}
{{--                                        </span>--}}
{{--                                    </span>--}}
{{--                                </span>--}}
{{--                                <label class="form-check-label" for="default-address">{{ __('global.Set as my default address') }}</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group mb-0 pt-3 mt-3">
                            <button class="btn btn-primary">{{ __('global.Save') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
