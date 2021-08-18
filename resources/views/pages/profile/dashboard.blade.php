@extends('layouts.account')
@section('content')
<div class="dashboard">
    <div class="dashboard__profile card profile-card">
        <div class="card-body profile-card__body">
            <div class="profile-card__avatar">
                <img src="/images/avatars/avatar-4.jpg" alt="">
            </div>
            <div class="profile-card__name">{{ $user->name }}</div>
            <div class="profile-card__email">{{ $user->email }}</div>
            <div class="profile-card__edit">
                <a href="account-profile" class="btn btn-secondary btn-sm">{{ __('global.Edit Profile') }}</a>
            </div>
        </div>
    </div>
    <div class="dashboard__address card address-card address-card--featured">
        <div class="address-card__badge tag-badge tag-badge--theme">{{ __('global.Address Default') }}</div>
        <div class="address-card__body">
            <div class="address-card__name">{{ $user->name }}</div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Your Address')}}</div>
                <div class="address-card__row-content">
                    {{ $user->shipping_address_country  }}<br>
                    {{ $user->shipping_address_city }}<br>
                    {{ $user->shipping_address_state }}<br>
                    {{ $user->shipping_address_street }}<br>
                </div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Phone Number')}}</div>
                <div class="address-card__row-content">{{ $user->phone ?? __('global.not set') }}</div>
            </div>
            <div class="address-card__row">
                <div class="address-card__row-title">{{ __('global.Email Address')}}</div>
                <div class="address-card__row-content">{{ $user->email }}</div>
            </div>
            <div class="address-card__footer">
                <a href="/account-profile">{{ __('global.Edit Profile') }}</a>
            </div>
        </div>
    </div>
    @if($quotes->count())
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
                        @foreach($quotes->orderBy('created_at', 'asc')->limit(5)->get() as $quote)
                        <tr>
                            <td><a href="{{ route('order.show', $quote->id) }}">{{ $quote->number }}</a></td>
                            <td>{{ $quote->created_at }}</td>
                            <td>{{ $quote->status }}</td>
                            <td>{{ $quote->grand_total_amount }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
