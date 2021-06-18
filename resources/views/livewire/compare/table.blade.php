<table class="compare__table compare-table">
 <tbody>
   <tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.product') }}</th>
    @foreach($products as $product)
        @dump($product)
    <td class="compare-table__column compare-table__column--product">
        <a href="{{ route('product.show', $product->id) }}" class="compare-table__product">
            <div class="compare-table__product-image image image--type--product">
                <div class="image__body">
                    <img class="image__tag" src="/images/products/product-1-150x150.jpg" alt="">
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




    <livewire:compare.row.availability />
    <livewire:compare.row.price />
    <livewire:compare.row.add-to-card />
    <livewire:compare.row.sku />
    <livewire:compare.row.weight />
    <livewire:compare.row.color />
    <livewire:compare.row.material />
    <livewire:compare.row.action />
    </tbody>
</table>
