<nav x-data="{ open: false }" class="border-gray-700 fixed w-full top-0 z-50" style="background-color: #7e4700;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <div class="shrink-0 flex items-center">
                  <img src="{{ asset('images/logo.png') }}" alt="" style="width: 205px; height: 43px;">
                </div>
            </div>


            <!-- Menu Desktop -->
            <div class="hidden sm:flex sm:items-center sm:ms-auto">
                <div class="space-x-8">
                    <a href="#inicio" class="text-white no-underline hover:text-gray-300">Início</a>
                    <a href="#sobre" class="text-white no-underline hover:text-gray-300">Sobre</a>
                    <a href="#servicos" class="text-white no-underline hover:text-gray-300">Serviços</a>
                    <a href="#agendamentos" class="text-white no-underline hover:text-gray-300">Agendamentos</a>
                </div>
            </div>


            <!-- Nome do Usuário - Desktop -->
            <div class="hidden sm:flex sm:items-center">
                @if (Auth::check())
                <div class="relative">
                    <button class="inline-flex items-center px-3 py-2 leading-4 font-medium text-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" style="background-color: #7e4700;" @click="open = ! open">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>


                    <!-- Dropdown com Profile e Log Out (visível quando "open" for true) -->
                    <div x-show="open" x-transition class="absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100">
                        <div class="p-2">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                    <a href="{{ route('login') }}" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none transition ease-in-out duration-150 no-underline">
                        {{ __('Login') }}
                    </a>
                @endif
            </div>


            <!-- Menu Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-300 focus:outline-none focus:text-gray-300 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>


    <!-- Menu Mobile Expansível -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <a href="#inicio" class="block px-4 py-2 text-white hover:bg-gray-700 no-underline">Início</a>
            <a href="#sobre" class="block px-4 py-2 text-white hover:bg-gray-700 no-underline">Sobre</a>
            <a href="#servicos" class="block px-4 py-2 text-white hover:bg-gray-700 no-underline">Serviços</a>
            <a href="#horarios" class="block px-4 py-2 text-white hover:bg-gray-700 no-underline">Horários</a>
            <a href="#agendamentos" class="block px-4 py-2 text-white hover:bg-gray-700 no-underline">Agendamentos</a>
        </div>


        <!-- Informações do Usuário no Mobile -->
        @if (Auth::check())
        <div class="border-t border-gray-200">
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')" style="color: white;" class=" hover:bg-gray-700">
                    {{ __('Profile') }}
                </x-responsive-nav-link>


                <!-- Log Out -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" style="color: white;" class=" hover:bg-gray-700">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endif
    </div>
</nav>








