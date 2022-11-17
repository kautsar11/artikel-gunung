@props(['post'])

<div class="flex justify-center mb-7">
    <div class="max-w-sm rounded overflow-hidden transition ease-in-out delay-100 hover:shadow-2xl">
        <img class="w-full" src="https://fakeimg.pl/300/" alt="Sunset in the mountains" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{ $post->nama_gunung }}</div>
            <p class="text-gray-700 text-base">
                {{ substr($post->konten,0 ,100) }}
            </p>
        </div>
        <div class="px-6 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
    </div>
</div>