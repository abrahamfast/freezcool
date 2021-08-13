<div class="block block-brands block-brands--layout--columns-8-full">
    <div class="container">
        <ul class="block-brands__list">
            @foreach($categories as $item)
            <li class="block-brands__item">
                <a href="" class="block-brands__item-link">
                    <img src="/storage/{{ $item->icon_id }}" alt="{{ $item->name }}">
                    <span class="block-brands__item-name">{{ $item->name }}</span>
                </a>
            </li>
            <li class="block-brands__divider" role="presentation"></li>
            @endforeach
        </ul>
    </div>
</div>
