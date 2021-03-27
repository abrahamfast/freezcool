@props([
    'id' => '',
    'type' => 'text',
    'size' => '6',
    'label' => 'placeholder',
    'name' => ''
])

<div class="form-group col-md-{{ $size }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $id }}" class="form-control" placeholder="{{ $label }}" name="{{ $name }}">
</div>
