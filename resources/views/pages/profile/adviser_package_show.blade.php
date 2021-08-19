@extends('layouts.master')
@php
    $quote = $package->quote()->first();
@endphp
@section('body')
    <div class="container">
        <div class="order-success__body">
            <div class="order-success__header">
                <h1 class="order-success__title">{{ $package->status }}</h1>
                <div class="order-success__subtitle">{{ __('global.Your package has been received', ['status' => $package->status]) }}</div>
                <div class="order-success__actions">
                    <a href="{{ route('adviser.package.index') }}" class="btn btn-sm btn-secondary">{{ __('global.back to package') }}</a>
                </div>
            </div>
            <div class="card order-success__meta">
                <ul class="order-success__meta-list">
                    <li class="order-success__meta-item">
                        <span class="order-success__meta-title">{{ __('global.package code') }}:</span>
                        <span class="order-success__meta-value">{{ $package->code }}</span>
                    </li>
                    <li class="order-success__meta-item">
                        <span class="order-success__meta-title">{{ __('global.Created At') }}</span>
                        <span class="order-success__meta-value">{{ $package->created_at }}</span>
                    </li>
                    <li class="order-success__meta-item">
                        <span class="order-success__meta-title">{{ __('global.Total') }}</span>
                        <span class="order-success__meta-value">{{ $quote->grand_total_amount }}</span>
                    </li>
                    <li class="order-success__meta-item">
                        <span class="order-success__meta-title">{{ __('global.advisor discount amount') }}</span>
                        <span class="order-success__meta-value">{{ $quote->pre_discounted_amount }}</span>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="order-list">
                    <table>
                        <thead class="order-list__header">
                        <tr>
                            <th class="order-list__column-label" colspan="2">نام محصول</th>
                            <th class="order-list__column-quantity">تعداد</th>
                            <th class="order-list__column-quantity">قیمت هر مورد</th>
                            <th class="order-list__column-quantity">تخفیف</th>
                            <th class="order-list__column-total">قیمت</th>
                        </tr>
                        </thead>
                        <tbody class="order-list__products bg-light">
                            @foreach($quote->items()->get() as $item)
                                @php
                                    $product = $item->product()->first();

                                @endphp
                                <tr>
                                <td class="order-list__column-image">
                                    <div class="image image--type--product">
                                        <a href="{{ route('product.show', $product->id) }}" class="image__body">
                                            <img class="image__tag" src="/storage/{{ $product->cover_id }}" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="order-list__column-product">
                                    <a href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                </td>
                                <td class="order-list__column-quantity" data-title="Quantity:">
                                    {{ $item->quantity }}
                                </td>
                                <td class="order-list__column-total">
                                    {{ $item->unit_price }}
                                </td>
                                <td class="order-list__column-total">
                                    {{ $item->discount }}
                                </td>
                                <td class="order-list__column-total">
                                    {{ $item->amount }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tbody class="order-list__subtotals">
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{ __('global.Subtotal') }}</th>
                                <td class="order-list__column-total">{{ $quote->amount }}</td>
                            </tr>
                            <tr>
                                <th class="order-list__column-label" colspan="3">{{ __('global.advisor discount amount') }}</th>
                                <td class="order-list__column-total">{{ $quote->pre_discounted_amount }}</td>
                            </tr>
                        </tbody>
                        <tfoot class="order-list__footer">
                            <tr>
                                <th class="order-list__column-label" colspan="3">Total</th>
                                <td class="order-list__column-total">{{ $quote->grand_total_amount }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <a href="{{ route('order.show', $quote->id) }}" class="btn btn-primary">{{ __('global.Show Quote') }}</a>
            </div>
        </div>
    </div>
    <div class="block-space block-space--layout--before-footer"></div>
@endsection
