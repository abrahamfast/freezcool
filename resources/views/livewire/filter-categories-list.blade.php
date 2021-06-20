<div class="filter filter--opened" data-collapse-item>
    <button type="button" class="filter__title" data-collapse-trigger>
        {{ __('global.Categories') }}
        <span class="filter__arrow">
            <svg width="12px" height="7px">
                <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
            </svg>
        </span>
    </button>

    <div class="filter__body" data-collapse-content>
        <div class="filter__container">
            <div class="filter-categories">
                <ul class="filter-categories__list">
                    <li class="filter-categories__item filter-categories__item--current">
                        <a href="{{ route('shop-list') }}">همه محصولات</a>
                        <div class="filter-categories__counter"></div>
                    </li>
                    @foreach($cates as $cat)
                    <li class="filter-categories__item filter-categories__item--current">
                        <a href="{{ route('category.list', $cat->id) }}">{{ $cat->name }}</a>
                        <div class="filter-categories__counter">{{ $cat->products()->count() }}</div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>