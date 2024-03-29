<nav class="bg-white md:container md:mx-auto my-2">
    <div class="max-w-7xl mx-auto px-8">
        <div class="flex items-center justify-between h-16">
            <div class="w-full justify-between flex items-center">

                {{-- icon/logo --}}
                <a class="flex-shrink-0 xl:w-96 w-40" href="/">
                    <i class="fas fa-regular fa-mountain-sun fa-2xl"></i>
                </a>

                <div class="w-full hidden lg:block">
                    <div class="ml-10 flex items-baseline space-x-4 justify-between">
                        <div class="lg:w-2/4 flex justify-start">
                            <x-link-navbar name="beranda" href="/" class="text-gray-700 hover:underline hover:decoration-2 hover:underline-offset-2 {{ request()->is('/') ? 'underline decoration-2 underline-offset-2' : '' }}" />
                            <x-link-navbar name="info lainnya" href="/info-lainnya" class="text-gray-700 hover:underline hover:decoration-2 hover:underline-offset-2 {{ request()->is('info-lainnya') ? 'underline decoration-2 underline-offset-2' : '' }}" />
                            @auth
                            @if (auth()->user()->isAdmin === 1)
                            <x-link-navbar name="postingan anda" href="{{ route('posts') }}" class="text-gray-700 hover:underline hover:decoration-2 hover:underline-offset-2 {{ request()->is('admin/posts') ? 'underline decoration-2 underline-offset-2' : '' }}" />
                            @endif
                            @endauth
                        </div>
                        <div>
                            @guest
                            <x-link-navbar name="login" href="/login" class="text-gray-700" />
                            <x-link-navbar name="register" href="/register" class="bg-slate-900 ml-2 hover:border hover:border-gray-700 hover:bg-white hover:text-gray-900 text-white" />
                            @else
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="font-mono bg-slate-900 text-white hover:bg-white hover:text-slate-900 hover:border rounded py-2 px-3">Logout</button>
                            </form>
                            @endguest
                        </div>
                    </div>
                </div>

                <!-- mobile menu button -->
                <div class="lg:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-gray-900" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- mobile menu -->
    <div class="container justify-center bg-slate-50 mobile-menu hidden absolute md:shadow-none shadow-md w-full mx-1">
        <ul class="mx-3 space-y-2 mb-4">
            <li>
                <x-link-navbar class="lg:hidden text-black" href="/" name="beranda" />
            </li>
            <li>
                <x-link-navbar class="lg:hidden text-black" href="/info-lainnya" name="info lainnya" />
            </li>
            <li>
                <x-link-navbar class="lg:hidden text-black" href="{{ route('posts') }}" name="postingan anda" />
            </li>
            @guest
            <li>
                <x-link-navbar class="lg:hidden text-black" href="/login" name="login" />
            </li>
            <li>
                <x-link-navbar class="lg:hidden text-black" href="/register" name="register" />
            </li>
            @endguest
        </ul>
    </div>
</nav>