@extends('layouts.master')
@section('body')
    <livewire:utils.block-header :title="__('global.New package')" />

    <div class="block">
        <div class="container">
            <div class="cart">
                <div class="cart__table cart-table">
                    <form action="{{ route('package.store') }}" method="POST">
                        @csrf
                    <table class="cart-table__table">
                        <thead class="cart-table__head">
                        <tr class="cart-table__row">
                            <th class="cart-table__column cart-table__column--image">تصویر</th>
                            <th class="cart-table__column cart-table__column--product">محصل</th>
                            <th class="cart-table__column cart-table__column--price">قیمت</th>
                            <th class="cart-table__column cart-table__column--total">تعداد</th>
                            <th class="cart-table__column cart-table__column--price">سقف تخفیف</th>
                            <th class="cart-table__column cart-table__column--total">قیمت بعد از تخفیف</th>
                            <th class="cart-table__column cart-table__column--remove"></th>
                        </tr>
                        </thead>
                        <tbody class="cart-table__body">


                        @foreach($quote->items()->get() as $item)
                            @php
                                $product = $item->product;
                            @endphp
                            <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image">
                                <div class="image image--type--product">
                                    <a href="{{ route('product.show', $product->id)  }}" class="image__body">
                                        <img class="image__tag" src="/storage/{{ $product->id }}" alt="">
                                    </a>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a href="" class="cart-table__product-name">{{ $product->name }}</a>
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $item->unit_price }}</td>
                                <td class="cart-table__column cart-table__column--quantity">
                                        <input disabled class="form-control input-number__input" type="number" min="1" value="{{ $item->quantity }}">
                                </td>

                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="cart-table__quantity input-number">
                                    @if($product->pricing_type == 'Profit Margin')
                                        <input class="form-control input-number__input" name="{{$item->id}}" type="number" min="1" max="{{ $product->pricing_factor - $item->discount }}" value="{{ $product->pricing_factor - $item->discount }}">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    @endif
                                </div>
                            </td>

                                <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $item->amount }}</td>
                            <td class="cart-table__column cart-table__column--remove">
                                <button type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
                                    <svg width="12" height="12">
                                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z"></path>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                        <tfoot class="cart-table__foot">
                        <tr>
                            <td colspan="6">
                                <div class="cart-table__actions">
                                    <div class="cart-table__update-button">
                                        <button type="submit" class="btn btn-sm btn-primary" href="">{{ __('global.Update Cart') }}</button>
                                        <a type="submit" class="btn btn-sm btn-primary" href="{{ route('package.send', $quote->id) }}">{{ __('global.Update package') }}</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="block-space block-space--layout--before-footer"></div>
@endsection
