@props(['type' => 'button','class' => '','buttonText' => 'Submit','bgColor' => '#194D79','color' =>  '#ffffff','href' => '#'])
@push('style')
    <style>
        a.btn-component{
            font-size: 16px;
            border-radius: 10px;
            margin-block: 6px;
            margin-inline-end: 10px;
            font-weight: bold;
            border: 2px solid #194D79;
            padding-inline: 50px;
            padding-block: 8px;
            transition: all 0.5s;
        }
        a.btn-component.bg-white:hover {
            background-color: #194D79;
            color: white;
        }
    </style>
@endpush
<a href="{{ url($href) }}" class="btn-component {{ $class }}" style="background-color: {{ $bgColor }};color: {{ $color }}">{{ $buttonText }}</a>
