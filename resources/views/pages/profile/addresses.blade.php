@extends('layouts.account')
@section('content')
<div class="addresses-list">
    <a href="{{ route('account-address.create') }}" class="addresses-list__item addresses-list__item--new">
        <div class="addresses-list__plus"></div>
        <div class="btn btn-secondary btn-sm">{{ __('global.Add New Address') }}</div>
    </a>
    <div class="addresses-list__divider"></div>
    @if($contacts->count())
        @foreach($contacts as $item)
            <div class="addresses-list__item card address-card">
                @if($item->is_primary)<div class="address-card__badge tag-badge tag-badge--theme">{{ __('global.Default Address') }}</div>@endif
                <div class="address-card__body">
                    <div class="address-card__name">{{ $item->fullName() }}</div>
                    <div class="address-card__row">
                        کشور: {{ $item->address_country }}<br>
                        شهر: {{ $item->address_city }}<br>
                       منطقه: {{ $item->address_state }}<br>
                        آدرس: {{ $item->address_street }}
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">{{ __('global.Phone Number') }}</div>
                        <div class="address-card__row-content">{{ $item->phone_number }}</div>
                    </div>
                    <div class="address-card__row">
                        <div class="address-card__row-title">{{ __('global.Email Address') }}</div>
                        <div class="address-card__row-content">{{ $item->email }}</div>
                    </div>
                    <div class="address-card__footer">
                        <a href="{{ route('account-address.edit', $item->id) }}">{{ __('global.Edit') }}</a>&nbsp;&nbsp;
                        <a href="{{ route('account-address.destroy', $item->id) }}">{{ __('global.Remove') }}</a>
                    </div>
                </div>
            </div>
            <div class="addresses-list__divider"></div>
        @endforeach
    @endif
</div>
@endsection
