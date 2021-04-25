@extends('layouts.account')
@section('content')
<div class="dashboard">
    <div class="dashboard__profile card profile-card">
        <div class="card-body profile-card__body">
            <div class="profile-card__avatar">
                <img src="/images/avatars/avatar-4.jpg" alt="">
            </div>
            <div class="profile-card__name">pelkio</div>
            <div class="profile-card__email">pelkio@gmail.com</div>
            <div class="profile-card__edit">
                <a href="account-profile" class="btn btn-secondary btn-sm">{{ __('global.Edit Profile') }}</a>
            </div>
        </div>
    </div>
    <div class="dashboard__address card address-card address-card--featured">
        <div class="address-card__badge tag-badge tag-badge--theme">{{ __('global.Address Default') }}</div>
        <div class="address-card__body">
            <div class="address-card__name">محیا رضایی</div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Your Address')}}</div>
                <div class="address-card__row-content">                ایران<br>
                ۱۰۲۰, تهران<br>
                دولت آباد فلکه اول پلاک ۱۰
                </div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Phone Number')}}</div>
                <div class="address-card__row-content">09032324184</div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Email Address')}}</div>
                <div class="address-card__row-content">mahya@gmail.com</div>
            </div>
            <div class="address-card__footer">
                <a href="">{{ __('global.Edit Address') }}</a>
            </div>
        </div>
    </div>
    <div class="dashboard__orders card">
        <div class="card-header">
            <h5>{{ __('global.Recent Orders') }}</h5>
        </div>
        <div class="card-divider"></div>
        <div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('global.Order') }}</th>
                            <th>{{ __('global.Orders Date') }}</th>
                            <th>{{ __('global.Orders Status') }}</th>
                            <th>{{ __('global.Orders Total') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="account-order-details">#8132</a></td>
                            <td>۲۰ فروردین ۱۳۹۹</td>
                            <td>در انتظار</td>
                            <td>۲۵۰،۰۰۰ تومان برای ۱۰ تا مورد</td>
                        </tr>
                        <tr>
                            <td><a href="account-order-details">#7592</a></td>
                            <td>۲۰ فروردین ۱۳۹۹</td>
                            <td>در انتظار</td>
                            <td>۲۵۰،۰۰۰ تومان برای ۱۰ تا مورد</td>
                        </tr>
                        <tr>
                            <td><a href="account-order-details">#7192</a></td>
                            <td>۲۰ فروردین ۱۳۹۹</td>
                            <td>حمل شده</td>
                            <td>۱۵۰،۰۰۰ تومان برای ۱۰ تا مورد</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
