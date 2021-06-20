<div class="product__tabs product-tabs product-tabs--layout--full">
    <ul class="product-tabs__list">
        <li class="product-tabs__item product-tabs__item--active"><a href="#product-tab-description">{{ __('global.Description') }}</a></li>
        <li class="product-tabs__item"><a href="#product-tab-specification">{{ __('global.Specification') }}</a></li>
        <li class="product-tabs__item">
            <a href="#product-tab-reviews">
                {{ __('global.Reviews') }}
                <span class="product-tabs__item-counter">۳۳</span>
            </a>
        </li>
    </ul>
    <div class="product-tabs__content">
        <div class="product-tabs__pane product-tabs__pane--active" id="product-tab-description">
            <div class="typography">
                {!! $product->more_details !!}
            </div>
        </div>
        <div class="product-tabs__pane" id="product-tab-specification">
            <div class="spec">
                <div class="spec__section">
                    <h4 class="spec__section-title">{{ __('global.General') }}</h4>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.insulation') }}</div>
                        <div class="spec__value">{{ $product->insulation }}</div>
                    </div>
                   <div class="spec__row">
                        <div class="spec__name">{{ __('global.chassis_material') }}</div>
                        <div class="spec__value">{{ $product->chassis_material }}</div>
                    </div>
                   <div class="spec__row">
                        <div class="spec__name">{{ __('global.evaporator_fan') }}</div>
                        <div class="spec__value">{{ $product->evaporator_fan }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.condenser_fan') }}</div>
                        <div class="spec__value">{{ $product->condenser_fan }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.evaporator_material') }}</div>
                        <div class="spec__value">{{ $product->evaporator_material }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.condenser_material') }}</div>
                        <div class="spec__value">{{ $product->condenser_material }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.electricity_consumption') }}</div>
                        <div class="spec__value">{{ $product->electricity_consumption }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_and_service') }}</div>
                        <div class="spec__value">{{ $product->warranty_and_service }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_and_service') }}</div>
                        <div class="spec__value">{{ $product->warranty_and_service }}</div>
                    </div>
                    <div class="spec__row">
                        <div class="spec__name">{{ __('global.warranty_terms') }}</div>
                        <div class="spec__value">{{ $product->warranty_terms }}</div>
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
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__body">
                                        <div class="review__avatar"><img src="images/avatars/avatar-1-42x42.jpg" alt=""></div>
                                        <div class="review__meta">
                                            <div class="review__author">غلامرضا سریوانی</div>
                                            <div class="review__date">۱ فروردین ۱۴۰۰</div>
                                        </div>
                                        <div class="review__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__content typography">
                                            این تقسیم بندی منسوخ نشده اما تغییر کرده است. فلسفه طبیعی به علوم مختلف طبیعی ، به ویژه نجوم و کیهان شناسی تقسیم شده است. فلسفه اخلاقی علوم اجتماعی را زاییده است ، اما همچنان شامل نظریه ارزش است.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__body">
                                        <div class="review__avatar"><img src="images/avatars/avatar-2-42x42.jpg" alt=""></div>
                                        <div class="review__meta">
                                            <div class="review__author">الهام نیوری</div>
                                            <div class="review__date">۱ فروردین ۱۴۰۰</div>
                                        </div>
                                        <div class="review__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__content typography">
                                            این تقسیم بندی منسوخ نشده اما تغییر کرده است. فلسفه طبیعی به علوم مختلف طبیعی ، به ویژه نجوم و کیهان شناسی تقسیم شده است. فلسفه اخلاقی علوم اجتماعی را زاییده است ، اما همچنان شامل نظریه ارزش است.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="reviews-list__item">
                                <div class="review">
                                    <div class="review__body">
                                        <div class="review__avatar"><img src="images/avatars/avatar-3-42x42.jpg" alt=""></div>
                                        <div class="review__meta">
                                            <div class="review__author">بهمن توری</div>
                                            <div class="review__date">۱ فروردین ۱۴۰۰</div>
                                        </div>
                                        <div class="review__rating">
                                            <div class="rating">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review__content typography">
                                            این تقسیم بندی منسوخ نشده اما تغییر کرده است. فلسفه طبیعی به علوم مختلف طبیعی ، به ویژه نجوم و کیهان شناسی تقسیم شده است. فلسفه اخلاقی علوم اجتماعی را زاییده است ، اما همچنان شامل نظریه ارزش است.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <div class="reviews-list__pagination">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link--with-arrow" href="" aria-label="Previous">
                                                                            <span class="page-link__arrow page-link__arrow--left" aria-hidden="true"><svg width="7" height="11">
                                                                                    <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                                                </svg>
                                                                            </span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">۱</a></li>
                                <li class="page-item active" aria-current="page">
                                                                        <span class="page-link">
                                                                            ۲
                                                                            <span class="sr-only">(current)</span>
                                                                        </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">۳</a></li>
                                <li class="page-item"><a class="page-link" href="#">۴</a></li>
                                <li class="page-item page-item--dots">
                                    <div class="pagination__dots"></div>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">۹</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link--with-arrow" href="" aria-label="Next">
                                                                            <span class="page-link__arrow page-link__arrow--right" aria-hidden="true"><svg width="7" height="11">
                                                                                    <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                                                </svg>
                                                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <form class="reviews-view__form" action="{{ route('review.store', $product->id)}}" method="POST">
                    @csrf
                    <h3 class="reviews-view__header">{{ __('global.Write A Review') }}</h3>
                    <div class="row">
                        <div class="col-xxl-8 col-xl-10 col-lg-9 col-12">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="review-stars">{{ __('global.Review Stars') }}</label>
                                    <select id="review-stars" name="review-stars" class="form-control">
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
                                <textarea name="review-text" class="form-control" id="review-text" rows="6"></textarea>
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

