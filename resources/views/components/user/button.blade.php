@props(['type' => 'button','class' => '','buttonText' => 'Submit','bgColor' => '#194D79','color' =>  '#ffffff'])
@push('style')
<style>
    button{
        font-size: 16px;
        border-radius: 10px;
        margin-block: 6px;
        margin-inline-end: 10px;
        font-weight: bold;
        border: 2px solid #194D79;
        padding-inline: 70px;
        padding-block: 8px;
    }
</style>
@endpush
<button type="{{ $type }}" class="{{ $class }}" style="background-color: {{ $bgColor }};color: {{ $color }}">{{ $buttonText }}</button>
