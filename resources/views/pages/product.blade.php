@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="$product->name"  />

    <div class="block-split">
        <div class="container">
            <div class="block-split__row row no-gutters">
                <div class="block-split__item block-split__item-content col-auto">
                    <div class="product product--layout--full">
                        <div class="product__body">
                            <div class="product__card product__card--one"></div>
                            <div class="product__card product__card--two"></div>

                            <livewire:product-single.product-gallery :product="$product"  />


                            <div class="product__header">
                                <h1 class="product__title">{{ $product->name }}</h1>
                                <div class="product__subtitle">
                                    <div class="product__rating">
                                        <div class="product__rating-stars">
                                            <div class="rating">
                                                <livewire:rating :rating="$product->rating" />
                                            </div>
                                        </div>
                                        <div class="product__rating-label">بر اساس  {{ \App\Helper\Stri::convertFa($product->comments()->count()) }} بررسی</div>
                                    </div>
                                    <div class="status-badge status-badge--style--success product__fit status-badge--has-icon status-badge--has-text">
                                        <div class="status-badge__body">
                                            <div class="status-badge__icon">
                                                <svg width="13" height="13">
                                                    <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                </svg>
                                            </div>
                                            @if($product->warranty_and_service)
                                                <div class="status-badge__text">گارانتی و خدمات پس از فروش</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title=""></div>
                                            @endif
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
                                        @foreach($product->getMoreDetails() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>





                            <livewire:product-single.product-info :product="$product" />
                            <livewire:product-single.product-tabs :product="$product" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <livewire:utils.block-space-before-footer />

@endsection
