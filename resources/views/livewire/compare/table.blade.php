<table class="compare__table compare-table">
 <tbody>
   <tr class="compare-table__row">
    <th class="compare-table__column compare-table__column--header">{{ __('global.product') }}</th>
    @foreach($products as $product)
    <td class="compare-table__column compare-table__column--product">
        <a href="/product/single" class="compare-table__product">
            <div class="compare-table__product-image image image--type--product">
                <div class="image__body">
                    <img class="image__tag" src="/images/products/product-1-150x150.jpg" alt="">
                </div>
            </div>
            <div class="compare-table__product-name">
                سردخانه کانکسی
            </div>
        </a>
    </td>
    @endforeach
    <td class="compare-table__column compare-table__column--fake"></td>
  </tr>
   



    <livewire:compare.row.rating />
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
