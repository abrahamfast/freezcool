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
            @isset($total_amount)
                <a class="btn btn-primary btn-xl btn-block" href="#">
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
