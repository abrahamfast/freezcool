<div class="cart__totals">
    <div class="card">
        <div class="card-body card-body--padding--2">
            <h3 class="card-title">مجموع سبد خرید</h3>
            <table class="cart__totals-table">
                <thead>
                <tr>
                    <th>جمع کل</th>
                    <td>{{ $amount ?? 0 }}</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th>حمل و نقل</th>
                    <td>
                        {{ $shipping_cost ?? 0 }}
                        <div>
                            <a href="">حمل و نقل را محاسبه کنید</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>مالیات</th>
                    <td>{{ $tax_amount ?? 0 }}</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th>جمع</th>
                    <td>{{ $total_amount ?? 0 }}</td>
                </tr>
                </tfoot>
            </table>

            <div class="checkout__payment-methods payment-methods">
                <ul class="payment-methods__list">
                    <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" checked="">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                            <span class="payment-methods__item-title">{{ __('global.Direct bank transfer') }}</span>
                        </label>
                        <div class="payment-methods__item-container" style="">
                            <div class="payment-methods__item-details text-muted">
                              {{ __('global.Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.') }}
                            </div>
                        </div>
                    </li>
                    <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                            <span class="payment-methods__item-title">{{ __('global.Check payments') }}</span>
                        </label>
                        <div class="payment-methods__item-container" style="">
                            <div class="payment-methods__item-details text-muted">
                                {{ __('global.Please send a check to Store Name') }}
                            </div>
                        </div>
                    </li>
                    <li class="payment-methods__item">
                        <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                            <span class="payment-methods__item-title">{{ __('global.Cash on delivery') }}</span>
                        </label>
                        <div class="payment-methods__item-container" style="">
                            <div class="payment-methods__item-details text-muted">
                                {{ __('global.Pay with cash upon delivery') }}
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            @isset($total_amount)
                <a class="btn btn-primary btn-xl btn-block" href="/cart/checkout">
                    ادامه پرداخت
                </a>
            @else
                <a class="btn btn-danger btn-xl btn-block" href="{{ route('shop-list') }}">
                    سبد شما خالی است
                </a>
            @endif
        </div>
    </div>
</div>
