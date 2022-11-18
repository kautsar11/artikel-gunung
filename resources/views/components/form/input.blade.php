@props(['name'])

<div {{ $attributes(['class' => 'w-full lg:w-96']) }}>
    <x-form.label name="{{ str_replace('_', ' ', $name) }}" />

    <input
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        {{ $attributes }} {{ $attributes(['values' => old($name), 'name' => $name]) }} />

    <x-form.error :name="$name" />
</div>
