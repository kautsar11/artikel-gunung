<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- main content / form -->
    <main class="mt-14 mx-3">
        <section class="flex">
            <div class="w-1/2 mx-10">
                <img class="object-cover rounded-xl" src="{{ $post->gambar == null ? 'https://fakeimg.pl/600x200/' : asset('storage/' . $post->gambar) }}" alt="Sunset in the mountains" width="100%" height="200px" />
                <h5 class="">Alamat :{{ $post->alamat }}</h5>
            </div>
            <div>
                <h1 class="font-bold uppercase text-xl">{{ $post->nama_gunung }}</h1>
                <h5>Harga Simaksi :{{ $post->harga_simaksi }}</h5>
                <p class="mt-5 text-justify indent-12">
                    {!! $post->konten !!}
                </p>
            </div>
        </section>
    </main>

    <section>
        @include('components._add-comment')

        @foreach ($post->comments as $comment)
        <x-post.post-comment :comment="$comment" />
        @endforeach
    </section>

    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>