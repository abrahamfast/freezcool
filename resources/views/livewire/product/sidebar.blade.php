<div class="block-split__item block-split__item-sidebar col-auto">
    <div class="sidebar sidebar--offcanvas--mobile">
        <div class="sidebar__backdrop"></div>
        <div class="sidebar__body">
            <div class="sidebar__header">
                <div class="sidebar__title">{{ __('global.Filters') }}</div>
                <button class="sidebar__close" type="button">
                    <svg width="12" height="12">
                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" />
                    </svg>
                </button>
            </div>
            <div class="sidebar__content">
                <div class="widget widget-filters widget-filters--offcanvas--mobile" data-collapse data-collapse-opened-class="filter--opened">
                    <div class="widget__header widget-filters__header">
                        <h4>{{ __('global.Filters') }}</h4>
                    </div>
                    <form action="">
                    <div class="widget-filters__list">
                        <div class="widget-filters__item">
   <livewire:filter-categories-list />
                        </div>
{{--                        <div class="widget-filters__item">--}}
{{--                            <div class="filter filter--opened" data-collapse-item>--}}
{{--                                <button type="button" class="filter__title" data-collapse-trigger>--}}
{{--                                    {{ __('global.Price') }}--}}
{{--                                    <span class="filter__arrow">--}}
{{--                                        <svg width="12px" height="7px">--}}
{{--                                        <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />--}}
{{--                                    </svg></span>--}}
{{--                                </button>--}}
{{--                                <div class="filter__body" data-collapse-content>--}}
{{--                                    <div class="filter__container">--}}
{{--                                        <div class="filter-price" data-min="0" data-max="1500" data-from="0" data-to="100">--}}
{{--                                            <div class="filter-price__slider"></div>--}}
{{--                                            <div class="filter-price__title-button">--}}
{{--                                                <div class="filter-price__title">تومان<span class="filter-price__min-value"></span> – تومان<span class="filter-price__max-value"></span></div>--}}
{{--                                                <button type="button" class="btn btn-xs btn-secondary filter-price__button">{{ __('global.Filters') }}</button>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="widget-filters__item">
<livewire:filter-brand-list />
                        </div>
                        <div class="widget-filters__item">
                            <div class="filter filter--opened" data-collapse-item>
                                <button type="button" class="filter__title" data-collapse-trigger>
                                    {{ __('global.Rating') }}
                                    <span class="filter__arrow"><svg width="12px" height="7px">
                                                                    <path d="M0.286,0.273 L0.286,0.273 C-0.070,0.629 -0.075,1.204 0.276,1.565 L5.516,6.993 L10.757,1.565 C11.108,1.204 11.103,0.629 10.747,0.273 L10.747,0.273 C10.385,-0.089 9.796,-0.086 9.437,0.279 L5.516,4.296 L1.596,0.279 C1.237,-0.086 0.648,-0.089 0.286,0.273 Z" />
                                                                </svg></span>
                                </button>
                                <div class="filter__body" data-collapse-content>
                                    <div class="filter__container">
<livewire:filter-rating-list />

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-filters__actions d-flex">
                        <button class="btn btn-primary btn-sm">{{ __('global.Filter') }}</button>
                        <button class="btn btn-secondary btn-sm" id="reset">{{ __('global.Reset') }}</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
