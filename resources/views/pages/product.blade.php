@extends('layouts.master')

@section('body')
    <livewire:utils.block-header  />

    <div class="block-split">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="product product--layout--full">
                        <div class="product__body">
                            <div class="product__card product__card--one"></div>
                            <div class="product__card product__card--two"></div>

                            <livewire:product-single.product-gallery />


                            <div class="product__header">
                                <h1 class="product__title">{{ $product->name }}</h1>
                                <div class="product__subtitle">
                                    <div class="product__rating">
                                        <div class="product__rating-stars">
                                            <div class="rating">
                                                <livewire:rating />
                                            </div>
                                        </div>
                                        <div class="product__rating-label">بر اساس ۴۳ بررسی</div>
                                    </div>
                                    <div class="status-badge status-badge--style--success product__fit status-badge--has-icon status-badge--has-text">
                                        <div class="status-badge__body">
                                            <div class="status-badge__icon">
                                                <svg width="13" height="13">
                                                    <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                </svg>
                                            </div>
                                            <div class="status-badge__text">گارانتی و خدمات پس از فروش</div>
                                            <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title=""></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product__main">
                                <div class="product__excerpt">
                                    {{ Str::limit($product->description) }}
                                </div>
                                <div class="product__features">
                                    <div class="product__features-title">ویژگی های کلیدی:</div>
                                    <ul>
                                        <li>مارک کمپراسور : bitzer یا DWM</li>
                                        <li>جنس مخزن یا وان : گالوانیزه یا فولاد</li>
                                        <li>جنس شاسی : قوطی یا تیرآهن</li>
                                        <li>نوع جوشکاری : co2</li>
                                        <li>نوع کندانسور : هوایی یا آبی</li>
                                    </ul>
                                </div>
                            </div>





                            <livewire:product-single.product-info />
                            <livewire:product-single.product-tabs :product="$product" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <livewire:utils.block-space-before-footer />

@endsection
