@props(['post'])

<div class="flex justify-center mb-7 h-[34rem] col-span-4">
    <div class="w-96 max-w-sm h-[34rem] rounded overflow-hidden transition ease-in-out delay-100 hover:shadow-2xl">
        <img class="w-full" src="{{ asset('storage/' . $post->gambar) }}" alt="Sunset in the mountains" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                <a href="posts/{{ $post->nama_gunung }}">
                    {{ $post->nama_gunung }}
                </a>
            </div>
            <p class="text-gray-700 text-base">
                {!! strlen($post->konten) > 30 ? substr($post->konten, 0, 100) . '...' : $post->konten !!}
            </p>
        </div>
    </div>
</div>
