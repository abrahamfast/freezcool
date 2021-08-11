@extends('layouts.master')
@section('body')
<livewire:utils.block-header :title="__('global.wishlist')" />

            <div class="block">
                <div class="container container--max--xl">
                    <div class="wishlist">
                        <table class="wishlist__table">
                            <thead class="wishlist__head">
                                <tr class="wishlist__row wishlist__row--head">
                                    <th class="wishlist__column wishlist__column--head wishlist__column--image">تصویر</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--product">محصول</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--stock">وضعیت</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--price">قیمت</th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--button"></th>
                                    <th class="wishlist__column wishlist__column--head wishlist__column--remove"></th>
                                </tr>
                            </thead>

                            <tbody class="wishlist__body">
                                @foreach($wishlist as $item)
                                    @php
                                        $product = $item->product()->first();
                                    @endphp
                                    <tr class="wishlist__row wishlist__row--body">
                                        <td class="wishlist__column wishlist__column--body wishlist__column--image">
                                            <div class="image image--type--product">
                                                <a href="{{ route('product.show', $product->id) }}" class="image__body">
                                                    <img class="image__tag" src="/storage/{{ $product->cover_id ?? 'default.jpg' }}" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--product">
                                            <div class="wishlist__product-name">
                                                <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                            </div>
                                            <div class="wishlist__product-rating">
                                                <div class="product-card__rating">
                                                    <div class="rating product-card__rating-stars">
                                                        <livewire:rating :rating="$product->rating" />
                                                    </div>
                                                    <div class="product-card__rating-label">بر اساس  {{ \App\Helper\Stri::convertFa($product->comments()->count()) }} بررسی</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--stock">
                                            <x-product.available :product="$product" />
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--price">
                                            <div class="product-card__price product-card__price--current">{{ \App\Helper\Stri::convertFa($product->takeCurrencyAttr('cost_price')) }} تومان</div>
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--button">
                                            <form action="/cart/add" method="POST" class="product-form">
                                                @csrf
                                                <input type="hidden" name="product-id" value="{{ $product->id }}">
                                                <input type="hidden" step="1" name="quantity" value="1" class="input-text qty text">
                                            </form>
                                            <button type="button" class="btn btn-sm btn-primary addcartbtn">{{ __('global.Add to cart') }}</button>
                                        </td>
                                        <td class="wishlist__column wishlist__column--body wishlist__column--remove">
                                            <button type="button" class="wishlist__remove btn btn-sm btn-muted btn-icon">
                                                <svg width="12" height="12">
                                                    <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
        c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
        C11.2,9.8,11.2,10.4,10.8,10.8z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
<livewire:utils.block-space-before-footer />
@endsection
