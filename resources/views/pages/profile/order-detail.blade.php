@extends('layouts.account')
@section('content')
<div class="card">
    <div class="order-header">
        <div class="order-header__actions">
            <a href="account-orders" class="btn btn-xs btn-secondary">{{ __('global.Back to list') }}</a>
        </div>
        <h5 class="order-header__title">{{ __('global.Order Num') }} #9478</h5>
        <div class="order-header__subtitle">
            {{-- Was placed on <mark>Oct 19, 2020</mark> and is currently <mark>Pending</mark>. --}}
        </div>
    </div>
    <div class="card-divider"></div>
    <div class="card-table">
        <div class="table-responsive-sm">
            <table>
                <thead>
                    <tr>
                        <th>{{ __('global.Product') }}</th>
                        <th>{{ __('global.Total') }}</th>
                    </tr>
                </thead>
                <tbody class="card-table__body card-table__body--merge-rows">
                    <tr>
                        <td>یخچال سردخانه جسد سه کابین 3 طبقه × ۲</td>
                        <td>۲۱۸ هزار تومان</td>
                    </tr>
                    <tr>
                        <td>یخچال سردخانه جسد سه کابین 3 طبقه × ۲</td>
                        <td>۲۱۸ هزار تومان</td>
                    </tr>
                    <tr>
                        <td>یخچال سردخانه جسد سه کابین 3 طبقه × ۲</td>
                        <td>۲۱۸ هزار تومان</td>
                    </tr>
                </tbody>
                <tbody class="card-table__body card-table__body--merge-rows">
                    <tr>
                        <th>{{ __('global.Subtotal') }}</th>
                        <td>۴۳۸ هزار تومان</td>
                    </tr>
                    <tr>
                        <th>{{ __('global.Shipping') }}</th>
                        <td>۲۵ هزار تومان</td>
                    </tr>
                    <tr>
                        <th>{{ __('global.Tax') }}</th>
                        <td>۲۵۶ هزار تومان</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{ __('global.Total') }}</th>
                        <td>۱ میلیون پانصد هزار تومان</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<div class="row mt-3 no-gutters mx-n2">
    <div class="col-sm-12 col-12 px-2">
        <div class="card address-card address-card--featured">
            <div class="address-card__badge tag-badge tag-badge--theme">
                {{ __('global.Shipping Address') }}
            </div>
            <div class="address-card__body">
                <div class="address-card__name">علی کریمی</div>
                <div class="address-card__row">
                    تهران شهر مشد<br>
                    ۱۲۲۲, منطقه ۱۶<br>
                    کوچه سهید پروری
                </div>
                <div class="address-card__row">
                    <div class="address-card__row-title">{{ __('global.Phone Number') }}</div>
                    <div class="address-card__row-content">۰۲۱۲۲۲۲۲۲۳</div>
                </div>
                <div class="address-card__row">
                    <div class="address-card__row-title">{{ __('global.Email Address') }}</div>
                    <div class="address-card__row-content">info@example.com</div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
