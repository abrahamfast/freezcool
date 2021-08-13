<div class="block block-categories">
    <div class="container">
        <div class="block-categories__header">
            <div class="block-categories__title">
                {{ __('global.Popular Brands') }}
                <div class="decor block-categories__title-decor decor--type--center">
                    <div class="decor__body">
                        <div class="decor__start"></div>
                        <div class="decor__end"></div>
                        <div class="decor__center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-categories__body">
        <div class="block block-brands block-brands--layout--columns-8-full">
            <div class="container">
                <ul class="block-brands__list">
                    @foreach($brands as $item)
                    <li class="block-brands__item">
                        <a href="{{ route('shop-list') }}/?brands={{$item->id}}" class="block-brands__item-link">
                            <img src="/storage/{{ $item->icon_id }}" alt="">
                            <span class="block-brands__item-name">{{ $item->name }}</span>
                        </a>
                    </li>
                    <li class="block-brands__divider" role="presentation"></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
