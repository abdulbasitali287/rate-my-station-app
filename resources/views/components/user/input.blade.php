<style>
    input{
        width: 100%;
        border: none;
        border-radius: 10px;
        background-color: #F2F2F2;
        padding-inline-start: 10px;
        padding-block: 10px;
    }
    input::placeholder{
        font-size: 14px;
    }
</style>
@props(['type' => 'text','placeholder' => '','value' => '','class' => ''])
<input type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="{{ $class }}">
