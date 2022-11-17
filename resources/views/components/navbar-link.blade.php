@props(['name'])

<a {{ $attributes->merge(['class'=>'px-3 py-2 rounded-md text-sm font-semibold font-mono']) }} {{ $attributes }}>
    {{ ucwords($name) }}
</a>
