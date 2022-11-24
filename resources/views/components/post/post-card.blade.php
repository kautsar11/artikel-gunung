@props(['post'])

<div class="flex justify-center mb-7 col-span-4">
    <div class="w-96 max-w-sm rounded overflow-hidden transition ease-in-out delay-100 hover:shadow-2xl">
        <img class="w-full" src="{{$post->gambar == null ? 'https://fakeimg.pl/200x150/' : asset('storage/' . $post->gambar) }}" width="100%" height="40%" alt="Sunset in the mountains" />
        <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">
                    <p>{{ $post->nama_gunung }}</p>
            </div>
            <div class="flex flex-col content-between">
                <p class="text-gray-700">
                    {!! strlen($post->konten) > 30 ? substr($post->konten, 0, 200) . '...' : $post->konten !!}
                </p>
                <a class="mt-6 bg-slate-900 text-white hover:bg-white hover:border hover:border-slate-900 hover:text-slate-900 p-2 w-20 text-center rounded font-semibold" href="posts/{{ $post->nama_gunung }}">Lihat</a>
            </div>
        </div>
    </div>
</div>
