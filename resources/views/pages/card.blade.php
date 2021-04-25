@extends('layouts.master')

@section('body')
	<livewire:utils.block-header :title="__('global.Shopping Cart')" />
	            <div class="block">
                <div class="container">
                    <div class="cart">
                        <div class="cart__table cart-table">
                            <table class="cart-table__table">
                                <thead class="cart-table__head">
                                    <tr class="cart-table__row">
                                        <th class="cart-table__column cart-table__column--image">تصویر</th>
                                        <th class="cart-table__column cart-table__column--product">محصل</th>
                                        <th class="cart-table__column cart-table__column--price">قیمت</th>
                                        <th class="cart-table__column cart-table__column--quantity">تعداد</th>
                                        <th class="cart-table__column cart-table__column--total">جمع</th>
                                        <th class="cart-table__column cart-table__column--remove"></th>
                                    </tr>
                                </thead>
                                <tbody class="cart-table__body">
                                    <tr class="cart-table__row">
                                        <td class="cart-table__column cart-table__column--image">
                                            <div class="image image--type--product">
                                                <a href="product-full.html" class="image__body">
                                                    <img class="image__tag" src="images/products/product-4-160x160.jpg" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="cart-table__column cart-table__column--product">
                                            <a href="" class="cart-table__product-name">چیلر تراکمی آب خنک و هوا خنک</a>
                                            <ul class="cart-table__options">
                                                <li>نوع کندانسور : هوایی یا آبی</li>
                                                <li>جنس مخزن یا وان : گالوانیزه یا فولاد</li>
                                            </ul>
                                        </td>
                                        <td class="cart-table__column cart-table__column--price" data-title="Price">۱۰۰ هزار تونان</td>
                                        <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                            <div class="cart-table__quantity input-number">
                                                <input class="form-control input-number__input" type="number" min="1" value="2">
                                                <div class="input-number__add"></div>
                                                <div class="input-number__sub"></div>
                                            </div>
                                        </td>
                                        <td class="cart-table__column cart-table__column--total" data-title="Total">۲۰۰ هزار تومان</td>
                                        <td class="cart-table__column cart-table__column--remove">
                                            <button type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
                                                <svg width="12" height="12">
                                                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot class="cart-table__foot">
                                    <tr>
                                        <td colspan="6">
                                            <div class="cart-table__actions">
                                                <form class="cart-table__coupon-form form-row">
                                                    <div class="form-group mb-0 col flex-grow-1">
                                                        <input type="text" class="form-control form-control-sm" placeholder="کد تخفیف">
                                                    </div>
                                                    <div class="form-group mb-0 col-auto">
                                                        <button type="button" class="btn btn-sm btn-primary">اعمال تخفیف</button>
                                                    </div>
                                                </form>
                                                <div class="cart-table__update-button">
                                                    <a class="btn btn-sm btn-primary" href="">بررسی دوباره</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="cart__totals">
                            <div class="card">
                                <div class="card-body card-body--padding--2">
                                    <h3 class="card-title">مجموع سبد خرید</h3>
                                    <table class="cart__totals-table">
                                        <thead>
                                            <tr>
                                                <th>جمع کل</th>
                                                <td>۲۰۰ هزار تومان</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>حمل و نقل</th>
                                                <td>
                                                    ۲۰۰ هزار تومان
                                                    <div>
                                                        <a href="">حمل و نقل را محاسبه کنید</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>مالیات</th>
                                                <td>۲۰ هزار تومان</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>جمع</th>
                                                <td>۴۲۰ هزار تومان</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <a class="btn btn-primary btn-xl btn-block" href="/pro">
                                        ادامه پرداخت
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
