<div class="cart__table cart-table">
    @if($quote)
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
            <tr class="cart-table__row">
                <td class="cart-table__column cart-table__column--image">
                    <div class="image image--type--product">
                        <a href="{{ route('product.show', $item->product()->first()->id) }}" class="image__body">
                            <img class="image__tag" src="/storage/{{ $item->product()->first()->cover_id ?? 'default.jpg' }}" alt="">
                        </a>
                    </div>
                </td>
                <td class="cart-table__column cart-table__column--product">
                    <a href="" class="cart-table__product-name">{{ $item->product()->first()->name }}</a>
                    <ul class="cart-table__options">
                        <li>مواد شاسی : {{ $item->product()->first()->insulation ?? '-' }}</li>
                        <li>فن کندانسور : {{ $item->product()->first()->chassis_material ?? '-' }}</li>
                        <li>فن اواپراتور : {{ $item->product()->first()->evaporator_fan ?? '-' }}</li>
                        <li>عایق کاری :	 {{ $item->product()->first()->condenser_fan ?? '-' }}</li>
                    </ul>
                </td>
                <td class="cart-table__column cart-table__column--price" data-title="Price">{{ \App\Helper\Stri::convertFa($item->product()->first()->takeCurrencyAttr('cost_price')) }} تومان </td>
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
        @endforeach
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
    @else
        <h1>{{ __('global.not found') }}</h1>
    @endif
</div>
