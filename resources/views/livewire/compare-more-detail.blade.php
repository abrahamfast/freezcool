<div class="text-right">
    @if($details)
        <ul style="list-style: none">
            @foreach($details as $detail)
                <li>{{ $detail }}</li>
            @endforeach
        </ul>
    @else
        -
    @endif
</div>
