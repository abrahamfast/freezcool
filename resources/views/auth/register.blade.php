@extends('layouts.master')
@section('body')
<div class="block-space block-space--layout--after-header"></div>
<div class="block">
    <div class="container container--max--lg">
        <div class="row">
            <div class="col-md-6 d-flex mt-4 mt-md-0">
                <div class="card flex-grow-1 mb-0 ml-0 ml-lg-3 mr-0 mr-lg-4">
                    <div class="card-body card-body--padding--2">
                        <h3 class="card-title">  @if($advisor) {{ __('global.advisor register') }} @else {{ __('global.customer register') }} @endif</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            @if($advisor)
                                <input type="hidden" name="advisor" value="true">
                            @endif
                            <div class="form-group">
                                <label for="signup-name">{{ __('global.full name') }}</label>
                                <input name="name" required id="signup-name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                             <div class="form-group">
                                <label for="signup-phoneNumber">{{ __('global.phoneNumber') }}</label>
                                <input name="phoneNumber" required id="signup-phoneNumber" value="{{ old('phoneNumber') }}" type="number" class="form-control @error('phoneNumber') is-invalid @enderror" placeholder="">
                                @error('phoneNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signup-password">{{ __('global.Password') }}</label>
                                <input name="password" id="signup-password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="signup-confirm">{{ __('global.Repeat password') }}</label>
                                <input name="password_confirmation" id="signup-confirm"  required type="password" class="form-control" placeholder="">
                            </div>

                            @if($advisor)

                            <div class="form-group">
                                <label>شرایط و ضوابط مشاور</label>
                                <textarea rows="7" class="form-control text-right" style="direction: rtl; font-size: 12px" placeholder="Placeholder" disabled="">مشتری یا کاربر به شخصی گفته می‌شود که با اطلاعات کاربری خود که در فرم ثبت‌نام درج کرده است، به ثبت سفارش یا هرگونه استفاده از خدمات اقدام کند. همچنین از آنجا که این شرکت یک وب‌سایت خرده‌فروشی آنلاین است، طبق قانون تجارت الکترونیک مشتری یا مصرف کننده هر شخصی است که به منظوری جز تجارت یا شغل حرفه‌ای به خرید کالا یا خدمات اقدام می‌کند.</textarea>
                            </div>
                            @endif

                            <div class="form-check">
                                <span class="input-check form-check-input">
                                    <span class="input-check__body">
                                        <input class="input-check__input" name="term" type="checkbox" id="term">
                                        <span class="input-check__box"></span>
                                        <span class="input-check__icon"><svg width="9px" height="7px">
                                                <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                                <label class="form-check-label" for="term">{{ __('global.accept term and condition') }}</label>
                            </div>


                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary mt-3">{{ __('global.Register') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="block-space block-space--layout--before-footer"></div>
@endsection
