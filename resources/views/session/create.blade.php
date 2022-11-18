<x-layout.base>
    <div class="h-screen w-full flex justify-center items-center">
        <div class="max-w-sm lg:min-w-fit rounded overflow-hidden shadow-lg">
            <form action="" method="post">
                @csrf
                <div class="px-6 py-4">
                    <h1 class="font-bold font-mono uppercase text-2xl text-center">
                        login
                    </h1>
                    <x-form.input type="email" placeholder="Email" autocomplete="email" name="email" class="my-4"/>
                    <x-form.input type="password" placeholder="Password" name="password" class="my-4"/>
                </div>
                <div class="px-6 pt-0 pb-6">
                    <x-form.submit-button class="bg-slate-700 hover:bg-slate-900 text-white">Login</x-form.submit-button>
                </div>
            </form>
        </div>
    </div>
</x-layout.base>
