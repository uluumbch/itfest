<!-- desktop navgitaion  -->
<nav
        class="hidden md:flex justify-between flex-row px-12 h-16 items-center bg-secondary"
      >
        <div class="logo">
          <img src="{{ asset('assets/LogoWhite.png') }}" alt="Logo ITFEST 2022" />
        </div>
        <div class="flex justify-evenly text-xl">
          <a
            class="group p-8 relative hover-trigger transition-opacity duration-700"
            href="/"
          >
            <span>Home</span>
            <div
              class="w-full h-4 left-1 bottom-2 rounded-t-full bg-darkblue absolute hidden  group-hover:block"
            ></div>
          </a>
          <a
            class="group p-8 relative hover-trigger transition-opacity duration-700"
            href="/itfest/roadmap"
          >
            <span>Roadmap</span>
            <div
              class="w-full h-4 left-1 bottom-2 rounded-t-full bg-darkblue absolute {{ (request()->is('itfest/roadmap')) ? 'block' : 'hidden group-hover:block' }}"
            ></div>
          </a>
          <a
            class="group p-8 relative hover-trigger transition-opacity duration-700"
            href="/itfest/tentang"
          >
            <span>About</span>
            <div
                class="w-full h-4 left-1 bottom-2 rounded-t-full bg-darkblue absolute {{ (request()->is('itfest/tentang')) ? 'block' : 'hidden group-hover:block' }}"
            ></div>
          </a>
        </div>
      </nav>
      <!-- mobile naviation -->
      <nav class="bg-secondary md:hidden">
        <div class="flex justify-between drop-shadow-2xl shadow-2xl">
          <div class="logo">
              <a href="/">
            <img src="{{asset('/assets/LogoWhite.png')}}" alt="Logo ITFEST 2022" />
              </a>
          </div>
          <div
            class="bg-darkblue p-1 items-center w-12 h-12 my-auto m-3 rounded-xl"
            id="mobile-nav"
          >
            <svg
              class="h-9 m-auto w-7 text-secondary"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <title>Menu</title>
              <path
                fill="currentColor"
                d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"
              />
            </svg>
          </div>
        </div>
        <div
          class="h-0 flex flex-col overflow-hidden transition-all duration-500 ease-out columns-1 text-right "
          id="mobile-nav-content"
        >
          <a
            class="h-12 px-4 py-3 text-md font-normal shadow-lg"
            href="/"
            >Home</a
          >
          <a
            class="h-12 px-4 py-3 text-md font-normal shadow-lg"
            href="/itfest/roadmap"
            >Roadmap</a
          >
          <a
            class="h-12 px-4 py-3 text-md font-normal shadow-lg"
            href="/itfest/tentang"
            >About</a
          >
        </div>
      </nav>
