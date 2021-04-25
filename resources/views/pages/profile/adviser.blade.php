@extends('layouts.account')
@section('content')
                            <div class="card">
                                <div class="card-header">
                                    <h5>{{ __('global.Adviser packages') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="vehicles-list vehicles-list--layout--account">
                                        <div class="vehicles-list__body">
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">یخچال سردخانه جسد سه کابین 3 طبقه</div>
                                                    <div class="vehicles-list__item-details">سردخانه چرخ دار و قابل حمل سه کشویی با قابلیت قرار گیری سه جسد همزمان از نوآوری های جدید گروه صنعتی (EIG) می باشد</div>
                                                    <div class="vehicles-list__item-links">
                                                        <a href="">{{ __('global.show parts') }}</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">یخچال سردخانه جسد سه کابین</div>
                                                    <div class="vehicles-list__item-details">سردخانه چرخ دار و قابل حمل سه کشویی با قابلیت قرار گیری سه جسد همزمان از نوآوری های جدید گروه صنعتی (EIG) می باشد،</div>
                                                    <div class="vehicles-list__item-links">
                                                        <a href="">{{ __('global.show parts') }}</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">یخچال سردخانه جسد سه کابین</div>
                                                    <div class="vehicles-list__item-details">سردخانه چرخ دار و قابل حمل سه کشویی با قابلیت قرار گیری سه جسد همزمان از نوآوری های جدید گروه صنعتی (EIG) می باشد</div>
                                                    <div class="vehicles-list__item-links">
                                                        <a href="">{{ __('global.show parts') }}</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="vehicles-list__item">
                                                <div class="vehicles-list__item-info">
                                                    <div class="vehicles-list__item-name">یخچال سردخانه جسد سه کابین</div>
                                                    <div class="vehicles-list__item-details">سردخانه چرخ دار و قابل حمل سه کشویی با قابلیت قرار گیری سه جسد همزمان از نوآوری های جدید گروه صنعتی (EIG) می باشد</div>
                                                    <div class="vehicles-list__item-links">
                                                        <a href="">{{ __('global.show parts') }}</a>
                                                    </div>
                                                </div>
                                                <button type="button" class="vehicles-list__item-remove">
                                                    <svg width="16" height="16">
                                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-header">
                                    <h5>{{ __('global.add new package') }}</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                                                <div class="vehicle-form vehicle-form--layout--account">
                                <div class="vehicle-form__item vehicle-form__item--select">
                                    <select class="form-control form-control-select2" aria-label="Year">
                                        <option value="none">ورودی شماره یک</option>
                                        <option>گزینه یک</option>
                                        <option>گزینه دوم</option>
                                        <option>گزینه سوم</option>
                                        <option>گزینه چهارم</option>
                                        <option>گزینه پنجم</option>
                                        <option>گزینه ششم</option>
                                        <option>گزینه هفتم</option>
                                        <option>گزینه هشتم</option>
                                        <option>گزینه نهم</option>
                                        <option>گزینه دهم</option>
                                        <option>گزینه یازدم</option>
                                    </select>
                                </div>
                                <div class="vehicle-form__item vehicle-form__item--select">
                                    <select class="form-control form-control-select2" aria-label="Brand" disabled>
                                        <option value="none">ورودی شماره دو</option>
                                        <option>گزینه یک</option>
                                        <option>گزینه دوم</option>
                                        <option>گزینه سوم</option>
                                        <option>گزینه چهارم</option>
                                        <option>گزینه پنجم</option>
                                        <option>گزینه ششم</option>
                                        <option>گزینه هفتم</option>
                                        <option>گزینه هشتم</option>
                                        <option>گزینه نهم</option>
                                        <option>گزینه دهم</option>
                                        <option>گزینه یازدم</option>
                                    </select>
                                </div>
                                <div class="vehicle-form__item vehicle-form__item--select">
                                    <select class="form-control form-control-select2" aria-label="Model" disabled>
                                        <option value="none">انتخاب مدل</option>
                                        <option>مدل یک</option>
                                        <option>مدل دو</option>
                                        <option>مدل سوم</option>
                                        <option>مدل آخر</option>
                                    </select>
                                </div>
                                <div class="vehicle-form__item vehicle-form__item--select">
                                    <select class="form-control form-control-select2" aria-label="Engine" disabled>
                                        <option value="none">انتخاب موتور</option>
                                        <option>۱۵ اسب سه فاز</option>
                                        <option>۱۰۰ اسب سه فاز</option>
                                        <option>۱۳۰ اسب سه فاز</option>
                                    </select>
                                </div>
                                <div class="vehicle-form__divider"></div>
                            </div>
                                    <div class="mt-4 pt-3">
                                        <a href="/btu/calculator/result" class="btn btn-sm btn-primary">{{ __('global.add new package') }}</a>
                                    </div>
                                </div>
                            </div>
@endsection
