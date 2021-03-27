@extends('layouts.master')

@section('body')
    <x-contact_us.block_map />
    <x-ui.block_space_layout_divider_xl />
    <div class="block">
        <div class="container container--max--lg">
            <div class="card">
                <div class="card-body card-body--padding--2">
                    <div class="row">
                        <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                            <div class="mr-1">
                                <h4 class="contact-us__header card-title">{{ __('global.contact_Our Address') }}</h4>
                                <div class="contact-us__address">
                                    <p>تلفن دفتر مرکزی : ۰۲۱۲۱۲۱۲۲۲</p>
                                    <p>تلفن دفتر تهران : ۰۲۱۲۱۲۱۲۲۲</p>
                                    <p>مسئول امور نمایندگان : ۰۲۱۲۱۲۱۲۲۲</p>
                                    <p>مسئول امور مشاوران : ۰۲۱۲۱۲۱۲۲۲</p>
                                    <p>
                                        ایران، تهران، خیابان جردن، چهارراه جهان کودک، کوچه پلاک ۲۰۰۰
                                    </p>
                                    <p>
                                        <strong>ساعات کار</strong><br>
                                        شنبه تا چهارشنبه از ساعت ۹ الی ۱۸
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="ml-1">
                                <h4 class="contact-us__header card-title">{{ __('global.contact_Leave_us_a_Message') }}</h4>
                                <form>
                                    <div class="form-row">
                                        <x-ui.form_input :id="'form-name'" :label="__('global.contact_Your Name')" :name="'name'" />
                                        <x-ui.form_input :id="'form-email'" :label="__('global.Email Address')" :name="'email'" :type="'email'" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="form-subject" class="form-control" placeholder="{{ __('global.contact_Subject') }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">{{ __('global.contact_Message') }}</label>
                                        <textarea id="form-message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('global.Send Message') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <livewire:utils.block-space-before-footer />

@endsection
