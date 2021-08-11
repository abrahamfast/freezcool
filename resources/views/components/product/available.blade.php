<div class="status-badge @if($product->status == 'Available') status-badge--style--success @else status-badge--style--failure @endif status-badge--has-text">
    <div class="status-badge__body">
        <div class="status-badge__text">@if($product->status == 'Available'){{ __('global.Availability Product') }} @else {{ __('global.unAvailability Product') }} @endif</div>
    </div>
</div>
