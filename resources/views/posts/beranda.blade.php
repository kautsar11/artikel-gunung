<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <main class="mt-14">

        {{-- search --}}
        <form action="" method="get" class="w-full flex justify-center mb-7">
            <input
                class="block text-gray-700 text-sm font-bold px-4 border-2 border-gray-700 h-9 w-1/3 rounded outline-none "
                type="text" name="search" placeholder="Cari nama gunung" />
        </form>

        {{-- post card --}}
        <div class="container md:grid md:grid-cols-2 md:mx-auto lg:grid-cols-3 lg:mx-auto lg:justify-around ">
            @foreach ($posts as $post)
                <x-post.post-card :post="$post" />
            @endforeach
        </div>
        {{ $posts->links() }}
    </main>

    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>
