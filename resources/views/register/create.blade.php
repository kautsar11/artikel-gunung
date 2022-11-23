<x-layout.base>
    <div class="h-screen w-full flex justify-center items-center">
        <div class="max-w-sm lg:min-w-fit rounded overflow-hidden shadow-lg">
            <form action="register" method="post">
                @csrf
                <div class="px-6 py-4">
                    <h1 class="font-bold font-mono uppercase text-2xl text-center">
                        Register
                    </h1>
                    <x-form.input type="text" placeholder="Username" name="username" class="my-4" />
                    <x-form.input type="email" placeholder="Email" name="email" class="my-4" />
                    <x-form.input type="password" placeholder="Password" name="password" class="my-4" />
                </div>
                <div class="px-6 pt-0 pb-6 flex justify-between">
                    <x-form.submit-button class="bg-slate-700 hover:bg-slate-900 text-white">
                        Register
                    </x-form.submit-button>

                    <a href="login" class="text-sm text-gray-400">Sudah memiliki akun?</a>
                </div>
            </form>
        </div>
    </div>
</x-layout.base>
