<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- main content / form -->
    <main class="mt-14">
        <section>
            <div class="container w-full block mx-5 lg:flex lg:mx-auto lg:space-x-24">
                <img src="{{ $post->gambar == null ? 'https://fakeimg.pl/600x200/' : asset('storage/' . $post->gambar) }}"
                    alt="Sunset in the mountains" width="50%" class="mr-4 h-full" />
                <div class="w-full flex flex-col mt-3">
                    <div class="mb-5">
                        <h1 class="uppercase text-3xl font-semibold font-mono">{{ $post->nama_gunung }}</h1>
                        <h5>Alamat :{{ $post->alamat }}</h5>
                        <h5>Harga Simaksi :{{ $post->harga_simaksi }}</h5>
                    </div>
                    <p>
                        {!! $post->konten !!}
                    </p>
                </div>
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
