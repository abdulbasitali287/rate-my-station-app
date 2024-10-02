<style>
    .input-group{
        border-radius: 10px;
        overflow: hidden;
    }
    label{
        right: 14px;
        top: 10px;
    }
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
@props(['type' => 'text','placeholder' => '','value' => '','class' => '','path' => 'user/assets/svg/eye-icon.svg'])
<div class="input-group position-relative">
    <input type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ $value }}" class="{{ $class }}">
    <label class="position-absolute" for="#"><img src="{{ asset($path) }}" alt="#"></label>
</div>
