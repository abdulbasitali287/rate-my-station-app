@props(['class' => '','label' => '','placeholder' => '','type' => 'text'])
<div class="form-group py-2 {{ $class }}">
    <x-user.label label="{{ $label }}"/>
    <x-user.input placeholder="{{ $placeholder }}" type="{{ $type }}" />
</div>
