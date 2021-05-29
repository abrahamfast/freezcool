<header class="site__header">
            <div class="header">
                <div class="header__megamenu-area megamenu-area"></div>
                <div class="header__topbar-classic-bg"></div>
                <div class="header__topbar-classic">
                    <div class="topbar topbar--classic">
                        <div class="topbar__item-text"><a class="topbar__link" href="/about-us">{{ __('global.About Us') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/contact-us">{{ __('global.Contacts') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/track-order">{{ __('global.Track Order') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/blog">{{ __('global.Blog') }}</a></div>
                        <div class="topbar__item-spring"></div>
                        <div class="topbar__item-button">
                            <a href="/compare" class="topbar__button">
                                <span class="topbar__button-label">{{ __('global.Compare') }} : </span>
                                <span class="topbar__button-title">۵ مورد</span>
                            </a>
                        </div>
                        <div class="topbar__item-button topbar__menu">
                            <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                                <span class="topbar__button-label">{{ __('global.Currency') }}:</span>
                                <span class="topbar__button-title">{{ __('global.USD') }}</span>
                                <span class="topbar__button-arrow"><svg width="7px" height="5px">
                                        <path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="topbar__menu-body">
                                <a class="topbar__menu-item" href="#">{{ __('global.Euro') }}</a>
                                <a class="topbar__menu-item" href="#">{{ __('global.PoundSterling') }}</a>
                                <a class="topbar__menu-item" href="#"> {{ __('global.Dollar') }}</a>
                            </div>
                        </div>
                        <div class="topbar__menu">
                            <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                                <span class="topbar__button-label">{{ __('global.Language') }}:</span>
                                <span class="topbar__button-title">{{ __('global.FA') }}</span>
                                <span class="topbar__button-arrow"><svg width="7px" height="5px">
                                        <path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="topbar__menu-body">
                                <a class="topbar__menu-item" href="#">
                                    <img src="/images/languages/language-1.png" alt=""><span>{{ __('global.en') }}</span>
                                </a>
                                <a class="topbar__menu-item" href="#">
                                    <img src="/images/languages/language-2.png" alt=""><span>{{ __('global.fa') }}</span>
                                </a>
                                <a class="topbar__menu-item" href="#">
                                    <img src="/images/languages/language-3.png" alt=""><span>{{ __('global.tu') }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__navbar">
                    <div class="header__navbar-departments">
                        <div class="departments">
                            <button class="departments__button" type="button">
                                <span class="departments__button-icon"><svg width="16px" height="12px">
                                        <path d="M0,7L0,5L16,5L16,7L0,7ZM0,0L16,0L16,2L0,2L0,0ZM12,12L0,12L0,10L12,10L12,12Z" />
                                    </svg>
                                </span>
                                <span class="departments__button-title">{{ __('global.Shop By Category') }}</span>
                                <span class="departments__button-arrow"><svg width="9px" height="6px">
                                        <path d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="departments__menu">
                                <div class="departments__arrow"></div>
                                <div class="departments__body">
                                    <ul class="departments__list">
                                        <li class="departments__list-padding" role="presentation"></li>

                                        <li class="departments__item">
                                            <a href="" class="departments__item-link">
                                                {{ __('global.category') }} شماره ۱
                                            </a>
                                        </li>
                                        <li class="departments__item">
                                            <a href="" class="departments__item-link">
                                                {{ __('global.category') }} شماره ۲
                                            </a>
                                        </li>
                                        <li class="departments__item">
                                            <a href="" class="departments__item-link">
                                                {{ __('global.category') }}۳
                                            </a>
                                        </li>
                                        <li class="departments__item">
                                            <a href="" class="departments__item-link">
                                                {{ __('global.category') }} شماره ۴
                                            </a>
                                        </li>
                                        <li class="departments__list-padding" role="presentation"></li>
                                    </ul>
                                    <div class="departments__menu-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__navbar-menu">
                        <div class="main-menu">
                            <ul class="main-menu__list">
                                <li class="main-menu__item">
                                    <a href="/" class="main-menu__link">
                                        {{ __('global.Home') }}
                                    </a>
                                </li>
                                <li class="main-menu__item main-menu__item--submenu--megamenu main-menu__item--has-submenu">
                                    <a href="/" class="main-menu__link">
                                        {{ __('global.category') }}
                                        <svg width="7px" height="5px">
                                            <path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                        </svg>
                                    </a>
                                    <div class="main-menu__submenu">
                                        <div class="main-menu__megamenu main-menu__megamenu--size--nl">
                                            <div class="megamenu">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                            <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                <a class="megamenu-links__item-link" href="">{{ __('global.category') }} شماره یک</a>
                                                                <ul class="megamenu-links">
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                <a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }} شماره دوم</a>
                                                                <ul class="megamenu-links">
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list"> زیر{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                            <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                <a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }} شماره سوم</a>
                                                                <ul class="megamenu-links">
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                <a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }} شماره چهارم</a>
                                                                <ul class="megamenu-links">
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                    <li class="megamenu-links__item"><a class="megamenu-links__item-link" href="/shop-list">{{ __('global.category') }}</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>


{{--                                 <li class="main-menu__item">
                                    <a href="/contact-us" class="main-menu__link" target="_blank">
                                        {{ __('global.Contacts') }}
                                    </a>
                                </li>
                                <li class="main-menu__item">
                                    <a href="/about-us" class="main-menu__link" target="_blank">
                                        {{ __('global.About Us') }}
                                    </a>
                                </li> --}}
{{--                                <li class="main-menu__item">--}}
{{--                                    <a href="/" class="main-menu__link" target="_blank">--}}
{{--                                        {{ __('global.packages') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                <li class="main-menu__item">
                                    <a href="/btu/calculator" class="main-menu__link" target="_blank">
                                        {{ __('global.calculator') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="header__navbar-phone phone">
                        <a href="tel:02122222222" class="phone__body">
                            <div class="phone__title">{{ __('global.Call Us') }} :</div>
                            <div class="phone__number">۰۲۱-۳۳۳۳۹۳۳۳</div>
                        </a>
                    </div>
                </div>
                <div class="header__logo">
                    <a href="/" class="logo">
                        <div class="logo__slogan">
                            {{ __('global.freecool') }}
                        </div>
                        <div class="logo__image">
                            <!-- logo -->
                            <img src="/logo.png" alt="">
                            <!-- logo / end -->
                        </div>
                    </a>
                </div>
                <div class="header__search">
                    <div class="search">
                        <form action="" class="search__body">
                            <div class="search__shadow"></div>
                            <input class="search__input" type="text" placeholder="{{ __('global.Enter keyword or part number') }}">
                            <button class="search__button search__button--end" type="submit">
                                <span class="search__button-icon"><svg width="20" height="20">
                                        <path d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
    c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
    c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z" />
                                    </svg>
                                </span>
                            </button>
                            <div class="search__box"></div>
                            <div class="search__decor">
                                <div class="search__decor-start"></div>
                                <div class="search__decor-end"></div>
                            </div>
                            <div class="search__dropdown search__dropdown--suggestions suggestions">
                                <div class="suggestions__group">
                                    <div class="suggestions__group-title">{{ __('global.Top Sales Products') }}</div>
                                    <div class="suggestions__group-content">
                                        <a class="suggestions__item suggestions__product" href="">
                                            <div class="suggestions__product-image image image--type--product">
                                                <div class="image__body">
                                                    <img class="image__tag" src="/images/products/product-2-40x40.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="suggestions__product-info">
                                                <div class="suggestions__product-name">سردخانه صنعتی بزرگ</div>
                                                <div class="suggestions__product-rating">
                                                    <div class="suggestions__product-rating-stars">
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
                                                    <div class="suggestions__product-rating-label">۲۲ نفر امتیاز ۵ داده اند</div>
                                                </div>
                                            </div>
                                            <div class="suggestions__product-price">۲۵۰ هزار تومان</div>
                                        </a>
                                        <a class="suggestions__item suggestions__product" href="">
                                            <div class="suggestions__product-image image image--type--product">
                                                <div class="image__body">
                                                    <img class="image__tag" src="/images/products/product-2-40x40.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="suggestions__product-info">
                                                <div class="suggestions__product-name">سردخانه صنعتی بزرگ</div>
                                                <div class="suggestions__product-rating">
                                                    <div class="suggestions__product-rating-stars">
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
                                                    <div class="suggestions__product-rating-label">۲۲ نفر امتیاز ۵ داده اند</div>
                                                </div>
                                            </div>
                                            <div class="suggestions__product-price">۲۵۰ هزار تومان</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="suggestions__group">
                                    <div class="suggestions__group-title">{{ __('global.Categories') }}</div>
                                    <div class="suggestions__group-content">
                                        <a class="suggestions__item suggestions__category" href="">سردخانه ۱۰۰ تنی میوه</a>
                                        <a class="suggestions__item suggestions__category" href="">سردخانه لبنیات ۲۰ تنی</a>
                                        <a class="suggestions__item suggestions__category" href="">{{ __('global.category') }}</a>
                                        <a class="suggestions__item suggestions__category" href="">{{ __('global.category') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header__indicators">
                    <div class="indicator">
                        <a href="/wishlist" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2
    C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2
    z" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="indicator indicator--trigger--click">
                        <a href="/account-login" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7
    C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                                </svg>
                            </span>
                            @auth
                                <span class="indicator__title">{{ __('global.Hello') }}, {{ Auth::user()->name }}</span>
                                <span class="indicator__value">{{ __('global.My Account') }}</span>
                            @endauth
                            @guest
                                <span class="indicator__title">{{ __('global.go to panel') }}</span>
                                <span class="indicator__value">{{ __('global.My Account') }}</span>
                            @endguest
                        </a>
                        <div class="indicator__content">
                            <div class="account-menu">
                                @guest
                                    <form class="account-menu__form" method="POST" action="{{ route('login') }}">
                        @csrf
                                    <div class="account-menu__form-title">
                                        {{ __('global.Log In to Your Account') }}
                                    </div>
                                    <div class="form-group">
                                        <label for="header-signin-email" class="sr-only">{{ __('global.Email address') }}</label>
                                          <div class="account-menu__form-forgot">
                                          <input id="phone[number]" name="email" type="text" placeholder="{{ __('global.Email address') }}" class="form-control lgn_input @error('email') is-invalid @enderror"  value="{{ old('email') }}" required="">
                                                                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="header-signin-password" class="sr-only">{{ __('global.Password') }}</label>
                                        <div class="account-menu__form-forgot">
                                          <input id="password1" name="password" type="password" placeholder="{{ __('global.Password') }}" class="form-control lgn_input" required="">
                                            <a href="" class="account-menu__form-forgot-link">{{ __('global.Forgot') }}</a>
                                        </div>
                                    </div>
                                    <div class="form-group account-menu__form-button">
                                        <button type="submit" class="btn btn-primary btn-sm">{{ __('global.Login') }}</button>
                                    </div>
                                    <div class="account-menu__form-link">
                                        <a href="/register">{{ __('global.Create An Account') }}</a>
                                    </div>
                                </form>
                                @endguest
                                @auth
                                <div class="account-menu__divider"></div>
                                <a href="" class="account-menu__user">
                                    <div class="account-menu__user-avatar">
                                        <img src="/images/avatars/avatar-4.jpg" alt="">
                                    </div>
                                    <div class="account-menu__user-info">
                                        <div class="account-menu__user-name">{{ Auth::user()->name }}</div>
                                        <div class="account-menu__user-email">{{ Auth::user()->email }}</div>
                                    </div>
                                </a>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <li><a href="account-dashboard">{{ __('global.Dashboard') }}</a></li>
                                    <li><a href="/track-order">{{ __('global.Track Order') }}</a></li>
                                    <li><a href="account-profile">{{ __('global.Edit Profile') }}</a></li>
                                    <li><a href="account-orders">{{ __('global.Order History') }}</a></li>
                                    <li><a href="account-addresses">{{ __('global.Addresses') }}</a></li>
                                </ul>
                                <div class="account-menu__divider"></div>
                                <ul class="account-menu__links">
                                    <li>
                                        <a href="logout" 
                                            class="item channel_item" 
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('global.Logout') }}
                                            <i class="uil uil-lock-alt icon__1"></i>
                                        </a>
                                    </li>
                                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                                @endguest
                            </div>

                        </div>
                    </div>
                    <div class="indicator indicator--trigger--click">
                        <a href="cart" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5" />
                                    <circle cx="23.5" cy="27.5" r="2.5" />
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
    l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
    c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z" />
                                </svg>
                                <span class="indicator__counter">۳</span>
                            </span>
                            <span class="indicator__title">{{ __('global.Shopping Cart') }}</span>
                            <span class="indicator__value">۱۰ میلیون تومان</span>
                        </a>
                        <div class="indicator__content">
                            <div class="dropcart">
                                <ul class="dropcart__list">
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="product-full">
                                                <img class="image__tag" src="/images/products/product-4-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="product-full">سردخانه میوه موتور ۱۲۰ بار</a>
                                            </div>
                                            <ul class="dropcart__item-features">
                                                <li>رنگ: قرمز</li>
                                                <li>مواد و جنس: توریم</li>
                                            </ul>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">۲</div>
                                                <div class="dropcart__item-price">۲۲۰ هزار تومان</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
    c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
    C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="product-full">
                                                <img class="image__tag" src="/images/products/product-2-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="product-full">سردخانه میوه موتور ۲۲۰ بار</a>
                                            </div>
                                            <ul class="dropcart__item-features">
                                                <li>رنگ: قرمز</li>
                                                <li>مواد و جنس: توریم</li>
                                            </ul>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">۱</div>
                                                <div class="dropcart__item-price">۲۱۸ هزار تومان</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
    c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
    C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                    <li class="dropcart__item">
                                        <div class="dropcart__item-image image image--type--product">
                                            <a class="image__body" href="product-full">
                                                <img class="image__tag" src="/images/products/product-5-70x70.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="dropcart__item-info">
                                            <div class="dropcart__item-name">
                                                <a href="/product-full">سردخانه میوه موتور</a>
                                            </div>
                                            <ul class="dropcart__item-features">
                                                <li>رنگ: قرمز</li>
                                                <li>مواد و جنس: توریم</li>
                                            </ul>
                                            <div class="dropcart__item-meta">
                                                <div class="dropcart__item-quantity">۳</div>
                                                <div class="dropcart__item-price">۲۲۰ هزار تومان</div>
                                            </div>
                                        </div>
                                        <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
    c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
    C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                            </svg>
                                        </button>
                                    </li>
                                    <li class="dropcart__divider" role="presentation"></li>
                                </ul>
                                <div class="dropcart__totals">
                                    <table>
                                        <tr>
                                            <th>{{ __('global.Subtotal') }}</th>
                                            <td>۲ میلیون و ۵۰۰ هزار</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('global.Shipping') }}</th>
                                            <td>۲ میلیون و ۵۰۰ هزار</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('global.Tax') }}</th>
                                            <td>۲ میلیون و ۵۰۰ هزار</td>
                                        </tr>
                                        <tr>
                                            <th>{{ __('global.Total') }}</th>
                                            <td>۲ میلیون و ۵۰۰ هزار</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="dropcart__actions">
                                    <a href="/cart" class="btn btn-secondary">{{ __('global.View Cart') }}</a>
                                    <a href="/checkout" class="btn btn-primary">{{ __('global.Checkout') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
