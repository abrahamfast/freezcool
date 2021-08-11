@props([
    'title' => 'با موفقیت انجام شد',
])

<div class="toast fade hide" role="alert" aria-live="assertive" data-delay="2000" aria-atomic="true" style="position: absolute;bottom: 10px; z-index: 99999;width: 300px">
    <div class="toast-header text-right">
        <strong class="ml-auto text-right">{{ $title }}</strong>
        <svg class="bd-placeholder-img rounded mr-2"  width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#8bc34a" width="100%" height="100%"></rect></svg>
    </div>
    <div class="toast-body">
        {{ session()->get('toast') }}
    </div>
</div>
