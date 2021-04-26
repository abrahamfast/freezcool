@extends('layouts.account')
@section('content')
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ __('global.Edit Address') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
                                        <div class="col-12 col-lg-10 col-xl-8">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="address-first-name">{{ __('global.First Name') }}</label>
                                                    <input type="text" class="form-control" id="address-first-name" placeholder="">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="address-last-name">{{ __('global.Last Name') }}</label>
                                                    <input type="text" class="form-control" id="address-last-name" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address-company-name">{{ __('global.Company') }} <span class="text-muted">{{ __('global.Optional') }}</span></label>
                                                <input type="text" class="form-control" id="address-company-name" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="address-country">{{ __('global.Country') }}</label>
                                                <select id="address-country" class="form-control">
                                                    <option value="">{{ __('global.Select a country...') }}</option>
                                                    <option value="AU">ایران</option>
                                                    <option value="DE">آلمان</option>
                                                    <option value="FR">فرانسه</option>
                                                    <option value="IT">ایتالیا</option>
                                                    <option value="RU">روسیه</option>
                                                    <option value="UA">عراق</option>
                                                    <option value="US">ترکیه</option>
                                                    <option value="US">امارات</option>
                                                    <option value="US">کویت</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="address-address1">{{ __('global.Street Address') }}</label>
                                                <input type="text" class="form-control" id="address-address1" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="address-city">{{ __('global.City') }}</label>
                                                <input type="text" class="form-control" id="address-city" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="address-state">{{ __('global.State') }}</label>
                                                <input type="text" class="form-control" id="address-state" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="address-postcode">{{ __('global.Postcode') }}</label>
                                                <input type="text" class="form-control" id="address-postcode" placeholder="">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="address-email">{{ __('global.Edit Address') }}</label>
                                                    <input type="email" class="form-control" id="address-email" placeholder="info@example.com">
                                                </div>
                                                <div class="form-group col-md-6 mb-0">
                                                    <label for="address-phone">{{ __('global.Phone Number') }}</label>
                                                    <input type="text" class="form-control" id="address-phone" placeholder="9891297979797">
                                                </div>
                                            </div>
                                            <div class="form-group mt-3">
                                                <div class="form-check">
                                                    <span class="input-check form-check-input">
                                                        <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" id="default-address">
                                                            <span class="input-check__box"></span>
                                                            <span class="input-check__icon"><svg width="9px" height="7px">
                                                                    <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    </span>
                                                    <label class="form-check-label" for="default-address">{{ __('global.Set as my default address') }}</label>
                                                </div>
                                            </div>
                                            <div class="form-group mb-0 pt-3 mt-3">
                                                <button class="btn btn-primary">{{ __('global.Save') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
@endsection
