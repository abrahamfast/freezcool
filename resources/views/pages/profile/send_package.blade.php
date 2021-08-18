@extends('layouts.master')
@section('body')
    <livewire:utils.block-header :title="__('global.Send package')" />

    <div class="block order-success">
        <div class="container">
            <div class="order-success__body">
                <div class="order-success__header">
                    <div class="order-success__subtitle">خریدار از طریق پیامک کد را دریافت خواهد کرد</div>
                </div>
                <div class="card order-success__meta">
                    <ul class="order-success__meta-list">
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Order Num') }}</span>
                            <span class="order-success__meta-value">{{ $quote->number }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Created At') }}</span>
                            <span class="order-success__meta-value">{{ $quote->created_at }}</span>
                        </li>
                        <li class="order-success__meta-item">
                            <span class="order-success__meta-title">{{ __('global.Total') }}</span>
                            <span class="order-success__meta-value">{{ $quote->amount }}</span>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="order-list">
                        <table>
                            <tfoot class="order-list__footer">
                            <tr>
                                <td colspan="6">
                                    <div class="cart-table__actions">
                                        <form class="cart-table__coupon-form form-row" action="{{ route('package.sms') }}">
                                            @csrf
                                            <input type="hidden" value="{{ $quote->id }}" name="qoute_id">
                                            <div class="form-group mb-0 col flex-grow-1">
                                                <input type="text" required name="phoneNumber" class="form-control form-control-sm" placeholder="شماره دریافت کننده">
                                            </div>
                                            <div class="form-group mb-0 col-auto">
                                                <button type="submit" class="btn btn-sm btn-primary">ارسال به خریدار</button>
                                            </div>
                                        </form>

                                        <a href="{{ route('package.cancel', $quote->id) }}" class="btn btn-sm btn-secondary">لغو شود</a>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="block-space block-space--layout--before-footer"></div>
@endsection
