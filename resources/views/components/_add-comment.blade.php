@auth
    <div class="mt-6 ml-10 mb-10">
        <form method="POST">
            @csrf

            <header class="mb-1">
                <h2 class="font-semibold">Komentar</h2>
            </header>

            <div>
                <textarea id="kontenKomen" name="body" rows="5" cols="20"
                    class="w-1/2 text-sm focus:outline-none focus:ring border p-2 border-gray-900 rounded"
                    placeholder="Tulis komentarmu disini!"></textarea>

                <x-form.error name="body" />
            </div>

            <div class="mt-2">
                <x-form.submit-button id="btnSub" class="bg-gray-900 text-white">kirim</x-form.submit-button>
            </div>
        </form>
    </div>
@else
    <div class="container mx-6 mt-32 mb-10">
        <p class="font-semibold">
            <a href="/register" class="hover:underline">Register</a>
            atau
            <a href="/login" class="hover:underline">Login</a>
            untuk bisa berkomentar
        </p>
    </div>
@endauth
