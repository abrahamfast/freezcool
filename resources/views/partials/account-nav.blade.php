<div class="account-nav flex-grow-1">
    <h4 class="account-nav__title">{{ __('global.Navigation') }}</h4>
    <ul class="account-nav__list">
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-dashboard') account-nav__item--active @endif">
            <a href="/account-dashboard">{{ __('global.Dashboard') }}</a>
        </li>
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-adviser') account-nav__item--active @endif">
            <a href="/account-adviser">{{ __('global.Adviser') }}</a>
        </li>
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-profile') account-nav__item--active @endif">
            <a href="/account-profile">{{ __('global.Edit Profile') }}</a>
        </li>

        <li class="account-nav__item @if(request()->route()->uri() == 'account-orders') account-nav__item--active @endif">
            <a href="/account-orders">{{ __('global.Order History') }}</a>
        </li>
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-addresses') account-nav__item--active @endif">
            <a href="/account-addresses">{{ __('global.Addresses') }}</a>
        </li>
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-edit-address') account-nav__item--active @endif">
            <a href="/account-edit-address">{{ __('global.Edit Address') }}</a>
        </li>
        <li class="account-nav__divider" role="presentation"></li>
        <li class="account-nav__item  @if(request()->route()->uri() == 'account-password') account-nav__item--active @endif">
            <a href="/account-password">{{ __('global.Password') }}</a>
        </li>
    </ul>
</div>
