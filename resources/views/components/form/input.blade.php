@props(['name'])

<div class="w-full lg:w-96 my-4">
    <x-form.label name="{{ $name }}"/>

    <input 
        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
        {{ $attributes }}
        {{ $attributes(['values'=> old($name)]) }}/>

        <x-form.error name="{{ $name }}"/>
</div>