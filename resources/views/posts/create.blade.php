<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- main content / form -->
    <main class="mt-14">
        <form class="w-full max-w-lg mx-6 md:mx-auto" action="{{ route('post.create.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex -mx-3 mb-6">
                <x-form.input name="nama_gunung" class="px-3 mb-6 md:mb-0" type="text" placeholder="Rinjani" />
                <x-form.input name="alamat" class="px-3 mb-6 md:mb-0" type="text" />
            </div>

            <div class="flex -mx-3 mb-2">
                <x-form.input name="harga_simaksi" class="md:w-1/3 px-3" type="number" placeholder="20.000" />
                <x-form.input name="gambar" class="md:w-1/3 px-3" type="file" />
            </div>
            <div class=" -mx-3 mb-6 mt-6">
                <x-form.textarea name="konten" id="konten" rows="5">{{ old('konten') }}</x-form.textarea>
            </div>
            <div class="container mt-9 mb-6 flex justify-between">
                <a href="{{ route('posts') }}" class="text-white bg-red-400 p-2 rounded-md w-20 text-center">Kembali</a>
                <x-form.submit-button class="bg-green-500 text-white">Posting</x-form.submit-button>
            </div>
        </form>
    </main>

    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>
