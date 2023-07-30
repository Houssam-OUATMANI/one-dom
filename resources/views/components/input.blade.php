@php
    $type ??= 'text';
    $name ??= '';
    $placeholder ??= '';
@endphp

<div class="form-group">
    <input type="{{$type}}"  name="{{$name}}" class="form-control first_name_js" placeholder="{{$placeholder}}" style="background-color: #fff; border: 1px solid #bbc0c8;">
</div>
