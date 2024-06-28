<header id="header" class="z-50 w-full flex flex-col justify-between items-center bg-q_background_clr/50 py-2 relative" style="z-index: 10000; backdrop-filter: blur(50px);">
    <div class="flex flex-col lg:flex-row gap-2 justify-between items-center w-full mx-auto my-1 px-4 max-w-7xl">
        <div class="w-full lg:w-auto flex justify-between">
          <a href="/" id="weblogo" class="mt-2 w-full max-w-12 h-auto rounded-lg">
              <img class="rounded-full" src="./public/assets/logoForWeb.webp" alt="website brand logo">
          </a>
          <div id="hamburger" class="p-2 block lg:hidden">
              <button type="button" class="p-2 flex items-center justify-center">
                  <span id="hamburger-line" class="flex flex-col gap-2 justify-around items-start">
                      <span class="hamburgerLine w-10 h-1 bg-q_tx_clr/75 rounded-full"></span>
                      <span class="hamburgerLine w-8 h-1 bg-q_tx_clr/75 rounded-full transition-all"></span>
                      <span class="hamburgerLine w-10 h-1 bg-q_tx_clr/75 rounded-full"></span>
                  </span>
              </button>
          </div>
        </div>
        <ul id="menu" class="h-auto w-full lg:w-auto hidden lg:flex flex-col lg:flex-row items-center gap-2 transition-all">
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./#home">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">Home</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./#about">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">About</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./work">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">My_Work</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./#service">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">Services</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./#pricing">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">Pricing</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto"><a class="flex items-center h-auto lg:h-8 w-full transition-all gap-2 hover:bg-q_surface_clr p-4 lg:p-1 rounded-md lg:link-hover-underline" href="./#testimonials">
            <span class="font-bold text-q_tx_clr/60 hover:text-q_tx_clr">Testimonials</span>
          </a></li>
          <li class="list-none group relative px-2 py-1 w-full lg:w-auto">
            <label class="inline-flex items-center m-auto cursor-pointer">
              <input id="themeChanger" type="checkbox" value="" class="sr-only peer">
              <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
              <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300 sr-only">Small toggle</span>
            </label>
          </li>
            <!-- <li class="list-none group relative px-2 py-1 w-full lg:w-auto">
              <button type="button" class="relative bg-q_primary_clr rounded-full px-4 py-2 group">
                <span class="z-10 text-base font-semibold tracking-wider text-q_background_clr transition-all">Customer login</span>
              </button>
            </li> -->
        </ul>
      </div>
    </header>
