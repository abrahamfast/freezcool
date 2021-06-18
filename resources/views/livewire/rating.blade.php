
<div class="rating__body">
    @for($i = 1; $i <= $rating; $i++)
        <div class="rating__star rating__star--active"></div>
    @endfor

    @for($i = 1; $i <= 5 - $rating; $i++)
        <div class="rating__star"></div>
    @endfor    
</div>