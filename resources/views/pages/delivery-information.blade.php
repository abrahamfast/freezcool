@extends('layouts.master')

@section('body')
       <div class="block-space block-space--layout--spaceship-ledge-height"></div>
            <div class="block">
                <div class="container">
                    <div class="document">
                        <div class="document__header">
                            <h1 class="document__title">{{ __('global.Terms And Conditions') }}</h1>
                            <div class="document__subtitle">این توافق نامه آخرین بار در 27 فروردین ۲۰۱۴ اصلاح شد.</div>
                        </div>
                        <div class="document__content card">
                            <div class="typography">
                                <p>
مشتری یا کاربر به شخصی گفته می‌شود که با اطلاعات کاربری خود که در فرم ثبت‌نام درج کرده است، به ثبت سفارش یا هرگونه استفاده از خدمات اقدام کند.
همچنین از آنجا که این شرکت یک وب‌سایت خرده‌فروشی آنلاین است، طبق قانون تجارت الکترونیک مشتری یا مصرف کننده هر شخصی است که به منظوری جز تجارت یا شغل حرفه‌ای به خرید کالا یا خدمات اقدام می‌کند.
                                </p>
                                <h2>{{ __('global.Definitions') }}</h2>
                                <ol>
                                    <li>
                                        - مسئولیت‌های مربوط به کیفیت، قیمت، محتوا، شرایط و همچنین خدمات پس از فروش محصول بر عهده فروشندگان است.
                                    </li>
                                    <li>
                                        - فاکتور کالاهایی که توسط فروشندگان در سایت عرضه می‌شود، در صورت درخواست خریدار توسط فروشنده ارسال می‌شود.

                                    </li>
                                    <li>
                                        - خریداران حداکثر تا 2 روز بعد از ثبت سفارش و قطعی شدن آن، فرصت دارند درخواست ارسال فاکتور را ثبت کنند.

                                    </li>
                                </ol>
                                <p>
                                   نحوه برگشت از فروش کالاهای فروشندگان طبق رویه دیجی‌کالا است، با این تفاوت که فروشنده مسئولیت هرگونه عدم مطابقت را به عهده می‌گیرد.
                                </p>
                                <p>برای کسب اطلاعات بیشتر می توانید از طریق فرم <a href="/contact-us">تماس با ما</a>  اقدام فرماید. .</p>
                                <div class="document__signature">
                                    مدریت این شرکت<img src="/images/signature.jpg" width="160" height="55" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
@endsection
