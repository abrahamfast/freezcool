<div class="block-header block-header--has-breadcrumb block-header--has-title">
    <div class="container">
        <div class="block-header__body">

            @livewire('utils.breadcrumb')
            @if($title)
                <h1 class="block-header__title">{{ $title }}</h1>
            @endif
        </div>
    </div>
</div>
