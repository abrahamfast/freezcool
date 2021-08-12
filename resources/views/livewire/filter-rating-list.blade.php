@if(count($rating))
<div class="filter-rating">
    <ul class="filter-rating__list">

        @foreach($rating as $item)
        <li class="filter-rating__item">
            <label class="filter-rating__item-label">
                <span class="input-check filter-rating__item-input">
                    <span class="input-check__body">
                        <input class="input-check__input" type="checkbox" @if($filters['rating'] && in_array($item->rating, $filters['rating'])) checked  @endif name="rating" value="{{ $item->rating }}">
                        <span class="input-check__box"></span>
                        <span class="input-check__icon"><svg width="9px" height="7px">
                                <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                            </svg>
                        </span>
                    </span>
                </span>
                <span class="filter-rating__item-stars">
                    <div class="rating">
                       <livewire:rating :rating="$item->rating" />
                    </div>
                </span>
                <span class="filter-rating__item-title sr-only">
                    {{ App\Helper\Stri::convertFa($item->count) }} امیتاز
                </span>
                <span class="filter-rating__item-counter">{{ App\Helper\Stri::convertFa($item->count) }} مورد</span>
            </label>
        </li>
        @endforeach
    </ul>
</div>
@endif
