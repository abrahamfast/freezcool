@extends('layouts.master')

@section('body')
    <livewire:utils.block-header :title="__('global.calculator')" />
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12 mt-4 mt-lg-0">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>{{ __('global.calculator_header') }}</h5>
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
                                <div class="vehicle-form__divider">و</div>
                                <div class="vehicle-form__item">
                                    <input type="text" class="form-control" placeholder="{{ __('global.calculator_Enter VIN number') }}" aria-label="VIN number">
                                </div>
                            </div>
                            <div class="mt-4 pt-3">
                                <a href="" class="btn btn-sm btn-primary">محاسبه</a>
                            </div>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body card-body--padding--2">
                            <div class="table-responsive">
                                <livewire:compare.calculator-result />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:utils.block-space-before-footer />

@endsection
