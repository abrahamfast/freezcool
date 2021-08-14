<div class="product__tabs product-tabs product-tabs--layout--full">
    <ul class="product-tabs__list">
        <li class="product-tabs__item product-tabs__item--active"><a href="#product-tab-description">{{ __('global.Description') }}</a></li>
        <li class="product-tabs__item"><a href="#product-tab-specification">{{ __('global.Specification') }}</a></li>
        <li class="product-tabs__item">
            <a href="#product-tab-reviews">
                {{ __('global.Reviews') }}
                <span class="product-tabs__item-counter">{{ \App\Helper\Stri::convertFa($product->comments()->count())  }}</span>
            </a>
        </li>
    </ul>
    <div class="product-tabs__content">
        <div class="product-tabs__pane product-tabs__pane--active" id="product-tab-description">
            <div class="typography">
                {!! $product->more_details ?? $product->description !!}
            </div>
        </div>
        <div class="product-tabs__pane" id="product-tab-specification">
            <div class="spec">
                <div class="spec__section">
                    <h4 class="spec__section-title">{{ __('global.General') }}</h4>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.insulation') }}</div>
                        <div class="spec__value">{{ $product->insulation ?? '-' }}</div>
                    </div>
                   <div class="spec__row">
                        <div class="spec__name">{{ __('global.chassis_material') }}</div>
                        <div class="spec__value">{{ $product->chassis_material ?? '-' }}</div>
                    </div>
                   <div class="spec__row">
                        <div class="spec__name">{{ __('global.evaporator_fan') }}</div>
                        <div class="spec__value">{{ $product->evaporator_fan ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.condenser_fan') }}</div>
                        <div class="spec__value">{{ $product->condenser_fan ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.evaporator_material') }}</div>
                        <div class="spec__value">{{ $product->evaporator_material ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.condenser_material') }}</div>
                        <div class="spec__value">{{ $product->condenser_material ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.electricity_consumption') }}</div>
                        <div class="spec__value">{{ $product->electricity_consumption ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_and_service') }}</div>
                        <div class="spec__value">{{ $product->warranty_and_service ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_and_service') }}</div>
                        <div class="spec__value">{{ $product->warranty_and_service ?? '-' }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_terms') }}</div>
                        <div class="spec__value">{{ $product->warranty_terms ?? '-' }}</div>
                    </div>
                </div>

                <div class="spec__disclaimer">
                    اطلاعات مربوط به مشخصات فنی ، مجموعه تحویل ، کشور سازنده و شکل ظاهری
                    کالاها فقط برای مرجع است و براساس آخرین اطلاعات موجود در زمان انتشار است.
                </div>
            </div>
        </div>
        <div class="product-tabs__pane" id="product-tab-reviews">
            <div class="reviews-view">
                <div class="reviews-view__list">
                    <div class="reviews-list">
                        <ol class="reviews-list__content">
                            @foreach($product->comments()->get() as $comment)
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__body">
                                        <div class="review__avatar">
                                            <img src="/images/avatars/avatar-1-42x42.jpg" alt="">
                                        </div>

                                        <div class="review__meta">
                                            <div class="review__author">{{ $comment->user()->first()->name ?? 'ناشناس' }}</div>
                                            <div class="review__date">{{ \App\Helper\Stri::convertFa(verta($comment->created_at)) }}</div>
                                        </div>
                                        <div class="review__rating">
                                            <div class="rating">
                                                <livewire:rating :rating="$comment->review_stars" />
                                            </div>
                                        </div>
                                        <div class="review__content typography">
                                            {{{ $comment->review_text }}}
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ol>

                    </div>
                </div>
                <form class="reviews-view__form" action="{{ route('review.store', $product->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <h3 class="reviews-view__header">{{ __('global.Write A Review') }}</h3>
                    <div class="row">
                        <div class="col-xxl-8 col-xl-10 col-lg-9 col-12">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="review-stars">{{ __('global.Review Stars') }}</label>
                                    <select id="review-stars" name="review_stars" class="form-control">
                                        <option value="5">۵ ستاره امتیاز</option>
                                        <option value="4">۴ ستاره امتیاز</option>
                                        <option value="3">۳ ستاره امتیاز</option>
                                        <option value="2">۲ ستاره امتیاز</option>
                                        <option value="1">۱ ستاره امتیاز</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="review-text">{{ __('global.Your Review') }}</label>
                                <textarea name="review_text" class="form-control" id="review-text" rows="6"></textarea>
                            </div>
                            <div class="form-group mb-0 mt-4">
                                @guest

                                    <a href="/login" class="btn btn-primary">{{ __('global.Post Your Review') }}</a>
                                @endguest
                                @auth
                                    <button class="btn btn-primary">{{ __('global.Post Your Review') }}</button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

