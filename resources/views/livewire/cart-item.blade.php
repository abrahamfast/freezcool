@if($quote)
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
    @foreach($quote_items as $item)
        @php
            $product = $item->product()->first();
        @endphp
        <tr class="cart-table__row">
            <td class="cart-table__column cart-table__column--image">
                <div class="image image--type--product">
                    <a href="{{ route('product.show', $product->id) }}" class="image__body">
                        <img class="image__tag" src="/storage/{{ $product->cover_id ?? 'default.jpg' }}" alt="">
                    </a>
                </div>
            </td>
            <td class="cart-table__column cart-table__column--product">
                <a href="" class="cart-table__product-name">{{ $product->name }}</a>
                <ul class="cart-table__options">
                    <li>مواد شاسی : {{ $product->insulation ?? '-' }}</li>
                    <li>فن کندانسور : {{ $product->chassis_material ?? '-' }}</li>
                    <li>فن اواپراتور : {{ $product->evaporator_fan ?? '-' }}</li>
                    <li>عایق کاری :	 {{ $product->condenser_fan ?? '-' }}</li>
                </ul>
            </td>
            <td class="cart-table__column cart-table__column--price" data-title="Price">
                    @if($product->pricing_type == 'Profit Margin')
                        <b>{{ $product->pricing_factor }} </b>درصد
                        <br>
                    @endif

                {{ \App\Helper\Stri::convertFa($item->unit_price) }} تومان
            </td>

            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                <div class="cart-table__quantity input-number">
                    <input disabled class="form-control input-number__input" type="number" min="1" value="{{ $item->quantity ?? 1 }}">
                </div>
            </td>
            <td class="cart-table__column cart-table__column--total" data-title="Total">{{ \App\Helper\Stri::convertFa($item->amount) }} تومان </td>
            <td class="cart-table__column cart-table__column--remove">
                <button type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted" data-value="{{ $item->id }}">
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
    <tfoot class="cart-table__foot">
    <tr>
        <td colspan="6">
            <div class="cart-table__actions">
                <form class="cart-table__coupon-form form-row">
                    <div class="form-group mb-0 col flex-grow-1">
                        <input type="text" class="form-control form-control-sm" placeholder="کد تخفیف مشاور">
                    </div>
                    <div class="form-group mb-0 col-auto">
                        <button type="button" class="btn btn-sm btn-primary">اعمال</button>
                    </div>
                </form>
            </div>
        </td>
    </tr>
    </tfoot>
</table>
</div>
@else
    <h1>{{ __('global.not found') }}</h1>
@endif
