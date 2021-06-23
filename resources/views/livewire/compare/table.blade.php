<table class="compare__table compare-table">
 <tbody>
   <tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.product') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">
        <a href="{{ route('product.show', $product->id) }}" class="compare-table__product">
            <div class="compare-table__product-image image image--type--product">
                <div class="image__body">
                    <img class="image__tag" src="/storage/{{ $product->cover_id ?? 'default.jpg'}}'" alt="">
                </div>
            </div>
            <div class="compare-table__product-name">
                {{ $product->name }}
            </div>
        </a>
    </td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
  </tr>


  <tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.Rating') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">
            <div class="compare-table__rating">
                <div class="compare-table__rating-stars">
                    <div class="rating">
                        {{-- @TODO rating need update from valid data --}}
                        <livewire:rating />
                    </div>
                </div>
                <div class="compare-table__rating-title">بر اساس ۳ بررسی</div>
            </div>
        </td>
    @endforeach

    <td class="compare-table__column compare-table__column--fake"></td>
</tr>

<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.Availability') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">
            <div class="status-badge @if($product->status == 'Available') status-badge--style--success @endif status-badge--has-text">
                <div class="status-badge__body">
                    <div class="status-badge__text">
                        @if($product->status == 'Available')
                            {{ __('global.In Stock') }}
                        @else
                            {{ __('global.Invalid stock') }}
                        @endif
                    </div>
                </div>
            </div>
        </td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>

<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.Price') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->cost_price }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>

<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.SKU') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->part_number }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>

<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.insulation') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->insulation }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.chassis_material') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->chassis_material }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.evaporator_fan') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->evaporator_fan }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.condenser_fan') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->condenser_fan }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.evaporator_material') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->evaporator_material }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.condenser_material') }}</th>
    @foreach($products as $product)
        <td class="compare-table__column compare-table__column--product">{{ $product->condenser_material }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.electricity_consumption') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">{{ $product->electricity_consumption }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.warranty_and_service') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">{{ $product->warranty_and_service }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>
<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.warranty_terms') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">{{ $product->warranty_terms }}</td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>

<tr class="compare-table__row">
   <th class="compare-table__column compare-table__column--header">{{ __('global.more_details') }}</th>
   @foreach($products as $product)
       <td class="compare-table__column compare-table__column--product">
           <livewire:compare-more-detail :details="$product->getMoreDetails()" />
       </td>
   @endforeach
   <td class="compare-table__column compare-table__column--fake"></td>
</tr>



<tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.Add to cart') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">
        <a href="button" class="btn btn-sm btn-primary">{{ __('global.Add to cart') }}</button>
    </td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
</tr>



    <tr class="compare-table__row">
        <th class="compare-table__column compare-table__column--header"></th>
        @foreach($products as $product)
            <td class="compare-table__column compare-table__column--product">
                <a href="{{ route('compare.delete', $product->id) }}" class="btn btn-sm btn-secondary">{{ __('global.compare_Remove') }}</button>
            </td>
        @endforeach
    </tr>
    </tbody>
</table>
