<header class="site__header">
            <div class="header">
                <div class="header__megamenu-area megamenu-area"></div>
                <div class="header__topbar-classic-bg"></div>
                <div class="header__topbar-classic">
                    <div class="topbar topbar--classic">
                        @guest
                        <div class="topbar__item-text"><a class="topbar__link"  href="/login">{{ __('global.user panel') }}</a></div>
                        @endguest
                        <div class="topbar__item-text"><a class="topbar__link" href="/about-us">{{ __('global.About Us') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/contact-us">{{ __('global.Contacts') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/track-order">{{ __('global.Track Order') }}</a></div>
                        <div class="topbar__item-text"><a class="topbar__link" href="/blog">{{ __('global.Blog') }}</a></div>
                        <div class="topbar__item-spring"></div>
                        <div class="topbar__item-button">
                            <a href="/compare" class="topbar__button">
                                <span class="topbar__button-label">{{ __('global.Compare') }} : </span>
                                <span class="topbar__button-title">{{ session()->get('compare') ? count(session()->get('compare')) : "۰" }} مورد</span>
                            </a>
                       </div>

                    </div>
                </div>
                <div class="header__navbar">
                    <livewire:header-navbar-departments />

                    <div class="header__navbar-menu">
                        <div class="main-menu">
                            <ul class="main-menu__list">
                                <li class="main-menu__item">
                                    <a href="/" class="main-menu__link">
                                        {{ __('global.Home') }}
                                    </a>
                                </li>
                                 <li class="main-menu__item">
                                    <a href="/btu/calculator" class="main-menu__link">
                                        {{ __('global.calculator') }}
                                    </a>
                                </li>
                                @guest
                                    <li class="main-menu__item">
                                        <a href="/login" class="main-menu__link">
                                            {{ __('global.Login to panel') }}
                                        </a>
                                    </li>
                                    <li class="main-menu__item">
                                        <a href="{{ route('register.before') }}" class="main-menu__link">
                                            {{ __('global.Register') }}
                                        </a>
                                    </li>
                                @endguest
{{--                                <li class="main-menu__item">--}}
{{--                                    <a href="/" class="main-menu__link" target="_blank">--}}
{{--                                        {{ __('global.packages') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}

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
                <livewire:header-search />
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
                                        <label for="header-signin-phone" class="sr-only">{{ __('global.phoneNumber enter') }}</label>
                                          <div class="account-menu__form-forgot">
                                          <input id="phone[number]" name="phone" type="text" placeholder="{{ __('global.phoneNumber enter') }}" class="form-control lgn_input @error('phone') is-invalid @enderror"  value="{{ old('phone') }}" required="">
                                                                          @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                      </div>
                                    </div>
                                    <div class="form-group account-menu__form-button">
                                        <button type="submit" class="btn btn-primary btn-sm">{{ __('global.Login') }}</button>
                                    </div>
                                    <div class="account-menu__form-link">
                                        <a href="{{ route('register.before') }}">{{ __('global.Create An Account') }}</a>
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
                                    <li><a href="/account-dashboard">{{ __('global.Dashboard') }}</a></li>
                                    <li><a href="/track-order">{{ __('global.Track Order') }}</a></li>
                                    <li><a href="/account-profile">{{ __('global.Edit Profile') }}</a></li>
                                    <li><a href="/account-orders">{{ __('global.Order History') }}</a></li>
                                    <li><a href="/account-addresses">{{ __('global.Addresses') }}</a></li>
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

                    <livewire:cart-button />
                </div>
            </div>
        </header>
