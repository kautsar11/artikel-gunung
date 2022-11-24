<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- main content / form -->
    <main class="mt-14">
        <section>
            <div class="container w-full flex mx-auto space-x-24">
                <img src="{{ asset('storage/' . $post->gambar) }}" alt="Sunset in the mountains" width="30%" height="20%" class="mr-4 h-full" />
                <div class="w-full">
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
