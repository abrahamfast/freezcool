@extends('layouts.account')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>{{ __('global.Order History') }}</h5>
    </div>
    <div class="card-divider"></div>
<div class="card-table">
            <div class="table-responsive-sm">
                <table>
                    <thead>
                        <tr>
                            <th>{{ __('global.ORDER') }}</th>
                            <th>{{ __('global.Orders Date') }}</th>
                            <th>{{ __('global.Orders Status') }}</th>
                            <th>{{ __('global.Orders Total') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($quotes as $item)
                        <tr>
                            <td><a href="{{ route('order.show', $item->id) }}">{{ $item->number }}</a></td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->grand_total_amount }} تومان برای {{ $item->items()->count() }}  مورد</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    <div class="card-divider"></div>

</div>
@endsection
