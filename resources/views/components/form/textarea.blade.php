@props(['name'])

<x-form.label name="{{ str_replace('_', ' ', $name) }}" />
<div {{ $attributes(['class' => 'w-full px-3']) }}>

    <textarea
        class="appearance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight border focus:outline-none focus:bg-white focus:border-gray-500"
        {{ $attributes }} {{ $attributes(['name' => $name]) }}></textarea>

    <x-form.error :name="$name" />
</div>
