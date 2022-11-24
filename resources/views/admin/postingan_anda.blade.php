<x-layout.base>
    <!-- navbar -->
    @include('components.layout._header')

    <!-- component -->
    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
        <div class="flex flex-col justify-center h-full">
            <!-- Table -->
            <div class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100 flex justify-between">
                    <h2 class="font-semibold text-gray-900 flex items-center">POSTINGAN ANDA</h2>
                    <a href="{{ route('post.create.show') }}"
                        class="bg-gray-900 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Tambah Postingan</a>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            @if ($posts->count())
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                    <tr>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">No</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">Nama Gunung</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-left">tanggal rilis</div>
                                        </th>
                                        <th class="p-2 whitespace-nowrap">
                                            <div class="font-semibold text-center"></div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <p>{{ $loop->iteration }}</p>
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left">{{ $post->nama_gunung }}</div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-left font-medium">
                                                    {{ date('d-M-Y', strtotime($post->created_at)) }}
                                                </div>
                                            </td>
                                            <td class="p-2 whitespace-nowrap">
                                                <div class="text-sm text-center flex space-x-2">
                                                    <a href="/admin/posts/{{ $post->id }}/edit"
                                                        class="text-blue-600 hover:text-blue-900">
                                                        Edit
                                                    </a>

                                                    <form action="/admin/posts/{{ $post->id }}" method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <button class="text-xs text-red-400">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p class="text-center mb-5 font-semibold">Belum ada postingan</p>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            {{ $posts->links() }}
        </div>
    </section>


    {{-- footer --}}
    @include('components.layout._footer')
</x-layout.base>
