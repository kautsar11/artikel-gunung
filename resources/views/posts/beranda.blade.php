<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <main class="mt-14">

        {{-- search --}}
        <form action="/" method="get"
            class="lg:w-full lg:flex lg:justify-center lg:mx-0 md:mx-64 md:w-[900px] w-[600px] mx-28 mb-7">
            <input
                class="block text-gray-700 text-sm font-bold px-4 border-2 border-gray-700 h-9 w-1/3 rounded outline-none "
                type="text" name="search" placeholder="Cari nama gunung" value="{{ request('search') }}" />
        </form>

        @if ($posts->count())
            {{-- post card --}}
            <div class="lg:grid lg:grid-cols-12 gap-x-5">
                @foreach ($posts as $post)
                    <x-post.post-card :post="$post" />
                @endforeach
            </div>
            {{ $posts->links() }}
        @else

            <p class="flex justify-center items-center font-semibold h-full">Tidak ada postingan</p>
        @endif
    </main>

    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>
