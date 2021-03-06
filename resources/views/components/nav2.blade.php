<!-- component -->
<!-- follow me on twitter @asad_codes -->
<div class=" place-items-center h-auto space-between">

        <!-- navbar -->
    <nav class="flex justify-between bg-green-900 text-white mb-5 h-auto">
        <div class="px-5 xl:px-12 py-6 flex w-full items-center">
          <a class="text-3xl font-bold font-heading" href="#">
            <!-- <img class="h-9" src="logo.png" alt="logo"> -->
            Menú Perfil
          </a>
          <!-- Nav Links -->
          <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
            <li><a class="hover:text-gray-200" href="{{route("welcome")}}">Home</a></li>
            <li><a class="hover:text-gray-200" href="{{route("profile")}}">Perfil</a></li>

            @if (Route::has('login'))

                @if (Auth::check() && Auth::user()->rol === 'admin')

                    <li><a href="{{ url('/dashboard') }}" class="hover:text-gray-200">Dashboard</a></li>

                @else
                    <li><a href="{{ route('login') }}" class="hover:text-gray-200">Log in</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="hover:text-gray-200">Register</a></li>
                    @endif
                @endif
            @endif

          </ul>
          <!-- Header Icons -->
          <div class="hidden xl:flex items-center space-x-5 items-center">
            <a class="hover:text-gray-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
            </a>
            <a class="flex items-center hover:text-gray-200" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
              <span class="flex absolute -mt-5 ml-4">
                <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
                  </span>
                </span>
            </a>
            <!-- Sign In / Register      -->
            <a class="flex items-center hover:text-gray-200" href="{{ route('logout') }}">
                <div class="text-white">{{ Auth::user()->username }}</div>
                <div style="display: flex">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link  style="color:white" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>

            </a>

          </div>
        </div>
        <!-- Responsive navbar -->
        <a class="xl:hidden flex mr-6 items-center" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          <span class="flex absolute -mt-5 ml-4">
            <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
            </span>
          </span>
        </a>
        <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </a>
      </nav>

  </div>
  <!-- Does this resource worth a follow? -->
  <div class="absolute bottom-0 right-0 mb-4 mr-4 z-10">
      <div>
          <a title="Follow me on twitter" href="https://www.twitter.com/asad_codes" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
              <img class="object-cover object-center w-full h-full rounded-full" src="https://www.imore.com/sites/imore.com/files/styles/large/public/field/image/2019/12/twitter-logo.jpg"/>
          </a>
      </div>
  </div>
