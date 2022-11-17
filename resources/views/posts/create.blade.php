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
      <form class="w-full max-w-lg mx-6 md:mx-auto">
        <div class="flex flex-wrap -mx-3 mb-6">
          <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="nama_gunung"
            >
              Nama Gunung
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="nama_gunung"
              type="text"
              placeholder="Rinjani"
            />
          </div>
          <div class="w-full md:w-1/2 px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="alamat"
            >
              alamat
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="alamat"
              type="text"
            />
          </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-2">
          <div class="w-full md:w-1/3 px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="harga_simaksi"
            >
              Harga Simaksi
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="harga_simaksi"
              type="number"
              placeholder="25.000"
            />
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-state"
            >
              State
            </label>
            <div class="relative">
              <select
                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state"
              >
                <option>New Mexico</option>
                <option>Missouri</option>
                <option>Texas</option>
              </select>
              <div
                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
              >
                <svg
                  class="fill-current h-4 w-4"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 20 20"
                >
                  <path
                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                  />
                </svg>
              </div>
            </div>
          </div>
          <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="grid-zip"
            >
              Zip
            </label>
            <input
              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-zip"
              type="text"
              placeholder="90210"
            />
          </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6 mt-6">
          <div class="w-full px-3">
            <label
              class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
              for="konten"
            >
              Konten
            </label>

            <textarea
              name="konten"
              id="konten"
              rows="5"
              class="appearance-none block w-full bg-gray-200 text-gray-700 border-gray-200 rounded py-3 px-4 leading-tight border focus:outline-none focus:bg-white focus:border-gray-500"
            ></textarea>
          </div>
        </div>
        <div class="hidden container mt-9 mb-6 lg:flex lg:justify-between">
          <a
            href=""
            class="text-white bg-red-400 p-2 rounded-md w-20 text-center"
            >Back</a
          >
          <a
            href=""
            class="text-white bg-green-400 p-2 rounded-md w-20 text-center"
            >Save</a
          >
        </div>
      </form>
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
