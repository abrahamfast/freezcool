@extends('layouts.account')
@section('content')
<div class="addresses-list">
    <a href="" class="addresses-list__item addresses-list__item--new">
        <div class="addresses-list__plus"></div>
        <div class="btn btn-secondary btn-sm">{{ __('global.Add New Address') }}</div>
    </a>
    <div class="addresses-list__divider"></div>
    <div class="addresses-list__item card address-card">
        <div class="address-card__badge tag-badge tag-badge--theme">{{ __('global.Default Address') }}</div>
        <div class="address-card__body">
            <div class="address-card__name">محیا رضایی۱</div>
            <div class="address-card__row">
                ایران<br>
                ۱۰۲۰, تهران<br>
                دولت آباد فلکه اول پلاک ۱۰
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Phone Number') }}</div>
                <div class="address-card__row-content">09032324184</div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Email Address') }}</div>
                <div class="address-card__row-content">mahya۱@gmail.com</div>
            </div>
            <div class="address-card__footer">
                <a href="">{{ __('global.Edit') }}</a>&nbsp;&nbsp;
                <a href="">{{ __('global.Remove') }}</a>
            </div>
        </div>
    </div>
    <div class="addresses-list__divider"></div>
    <div class="addresses-list__item card address-card">
        <div class="address-card__body">
         <div class="address-card__name">محیا رضایی</div>
            <div class="address-card__row">
                ایران<br>
                ۱۰۲۰, تهران<br>
                دولت آباد فلکه اول پلاک ۱۰
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Phone Number') }}</div>
                <div class="address-card__row-content">09032324184</div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Email Address') }}</div>
                <div class="address-card__row-content">mahya@gmail.com</div>
            </div>
            <div class="address-card__footer">
                <a href="">{{ __('global.Edit') }}</a>&nbsp;&nbsp;
                <a href="">{{ __('global.Remove') }}</a>
            </div>
        </div>
    </div>
    <div class="addresses-list__divider"></div>
</div>
@endsection
