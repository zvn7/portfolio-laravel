@props(['active' => false])
<a
    {{$attributes}}
    class="{{
        $active
            ? 'underline '
            : 'text-gray-300 hover:underline'
    }} -mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50"
    aria-current="{{ $active ? 'page' : false }}"
    >{{ $slot }}</a
>
