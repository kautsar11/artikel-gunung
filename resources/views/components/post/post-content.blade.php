<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font awesome -->
    <script
      src="https://kit.fontawesome.com/65c8fa5346.js"
      crossorigin="anonymous"
    ></script>

    <!-- tiny library for text rich -->
    <script
      src="https://cdn.tiny.cloud/1/15gb8kqdjbcom2naq57gmvjg6kra064bwf4k1ukeugyl3ixe/tinymce/6/tinymce.min.js"
      referrerpolicy="origin"
    ></script>
    <script>
      tinymce.init({ selector: "#konten" });
    </script>
  </head>
  <body class="min-h-screen flex flex-col">
    <!-- navbar -->
    <nav class="bg-white md:container md:mx-auto my-2">
      <div class="max-w-7xl mx-auto px-8">
        <div class="flex items-center justify-between h-16">
          <div class="w-full justify-between flex items-center">
            <a class="flex-shrink-0 xl:w-96 w-40" href="/">
              <!-- <img class="h-8 w-8" src="/icons/rocket.svg" alt="Workflow" /> -->
              <i class="fas fa-regular fa-mountain-sun fa-2xl"></i>
            </a>
            <div class="w-full hidden lg:block">
              <div class="ml-10 flex items-baseline space-x-4 justify-between">
                <div>
                  <a
                    class="text-gray-700 px-3 py-2 rounded-md text-sm font-semibold font-mono"
                    href="/#"
                  >
                    Home
                  </a>
                  <a
                    class="text-gray-700 px-3 py-2 rounded-md text-sm font-semibold font-mono"
                    href="/#"
                  >
                    Gallery
                  </a>
                  <a
                    class="text-gray-700 px-3 py-2 rounded-md text-sm font-semibold font-mono"
                    href="/#"
                  >
                    Content
                  </a>
                  <a
                    class="text-gray-700 px-3 py-2 rounded-md text-sm font-semibold font-mono"
                    href="/#"
                  >
                    Contact
                  </a>
                </div>
                <div>
                  <a
                    class="text-gray-700 px-3 py-2 rounded-md text-sm font-semibold font-mono"
                    href="/#"
                  >
                    Login
                  </a>
                  <a
                    class="text-white px-3 py-2 rounded-md text-sm font-semibold font-mono bg-slate-900 ml-2 hover:border hover:border-gray-700 hover:bg-white hover:text-gray-900"
                    href="/#"
                  >
                    Register
                  </a>
                </div>
              </div>
            </div>

            <!-- mobile menu button -->
            <div class="lg:hidden flex items-center">
              <button class="outline-none mobile-menu-button">
                <svg
                  class="w-6 h-6 text-gray-500 hover:text-gray-900"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- mobile menu -->
      <div
        class="container justify-center bg-slate-50 mobile-menu hidden absolute md:shadow-none shadow-md w-full mx-1"
      >
        <ul class="mx-3 space-y-2 mb-4">
          <li class="active">
            <a
              class="lg:hidden text-black px-3 py-2 rounded-md text-sm font-medium"
              href="/#"
            >
              Home
            </a>
          </li>
          <li>
            <a
              class="lg:hidden text-black px-3 py-2 rounded-md text-sm font-medium"
              href="/#"
            >
              Home
            </a>
          </li>
          <li>
            <a
              class="lg:hidden text-black px-3 py-2 rounded-md text-sm font-medium"
              href="/#"
            >
              Home
            </a>
          </li>
          <li>
            <a
              class="lg:hidden text-black px-3 py-2 rounded-md text-sm font-medium"
              href="/#"
            >
              Home
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <!-- main content / form -->
    <main class="mt-14">
      <div class="container w-full flex mx-auto">
        <img
          src="https://fakeimg.pl/600x60/"
          alt="Sunset in the mountains"
          class="mr-4 h-full"
        />
        <div>
          <h1 class="uppercase text-3xl font-semibold font-mono">title</h1>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias
            illum iure molestiae nostrum praesentium in at officiis debitis,
            iste architecto vel ab, nesciunt quae unde perferendis dignissimos
            deleniti esse animi. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Reprehenderit nam at placeat eum ea consequuntur
            saepe amet. Quasi magnam qui mollitia consectetur nostrum minus,
            exercitationem cumque. Rerum vel sed et!
          </p>
        </div>
      </div>
    </main>

    <footer class="mt-auto">
      <div class="items-center max-w-full h-16 container bg-gray-900">
        <p
          class="h-full flex justify-center items-center text-white font-semibold"
        >
          Dibuat oleh mahasiswa unikom
        </p>
      </div>
    </footer>
  </body>
</html>
