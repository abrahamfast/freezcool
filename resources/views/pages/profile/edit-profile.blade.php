@extends('layouts.account')
@section('content')
<div class="card">
    <div class="card-header">
        <h5>{{ __('global.Edit Profile') }}</h5>
    </div>
    <div class="card-divider"></div>
    <div class="card-body card-body--padding--2">
        <div class="row no-gutters">
            <div class="col-12 col-lg-7 col-xl-6">
                <form action="{{ route('profile.save') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="profile-first-name">{{ __('global.First Name') }}</label>
                    <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="profile-first-name" placeholder="" />
                </div>
                <div class="form-group">
                    <label for="profile-email">{{ __('global.Email Address') }}</label>
                    <input name="email" value="{{ $user->email }}" type="email" class="form-control" id="profile-email" placeholder="">
                </div>
                <div class="form-group">
                    <label for="profile-phone">{{ __('global.Phone Number') }}</label>
                    <input name="phone" value="{{ $user->phone }}" type="text" class="form-control" id="profile-phone" placeholder="">
                </div>
                <div class="form-group mb-0">
                    <button class="btn btn-primary mt-3">{{ __('global.Save') }}</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
