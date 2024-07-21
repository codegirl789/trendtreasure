<div class="py-2 px-4 h-16 hidden md:flex justify-between items-center shadow">
    <div class="relative">
        <input type="text" class="outline-none border-none bg-violet-50 shadow rounded-3xl w-72"
            placeholder="Search Products">
        <i class="fas fa-search absolute right-3 top-3 text-violet-600"></i>
    </div>
    <div class="flex justify-between items-center space-x-4 pr-4">
        <livewire:your-cart-navbar />
        <a href="#" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
            <div class="text-base">Wishlist
                @auth
                    {{-- <span class="px-3 font-semibold py-1 text-center bg-white rounded-full shadow">
                        {{ Auth::user()->Carts->count() }}
                    </span> --}}
                @endauth
                <i class="fa-lg fa-regular fa-heart pl-2"></i>
            </div>
            {{-- <span class="text-base pr-2"> Wishlist </span> --}}
            {{-- <i class="fa-lg fa-regular fa-heart cursor-pointer"></i> --}}
        </a>
        <div class="relative z-50 flex justify-between items-center pl-8 space-x-2" x-data="{ DropdownOpen: false }">
            @auth
                <span class="text-gray-700 text-base">Welcome, <strong>{{ Auth::user()->username }}</strong> </span>
            @endauth
            <img @click="DropdownOpen = !DropdownOpen"
                src=" {{ Auth::user() ? asset(Auth::user()->image) : asset('users/dog.jpg') }}" alt="avatar"
                class="w-10 h-10 rounded-full object-cover cursor-pointer">
            @guest
                <i class="fa-solid fa-caret-down cursor-pointer" @click="DropdownOpen = !DropdownOpen"></i>
            @endguest
            <div x-cloaked x-show="DropdownOpen" x-transition.oen.top.left.duration.500ms
                @click.away="DropdownOpen=false" @keydown.escape.window="DropdownOpen=false"
                class="absolute w-60 h-max p-3 top-12 right-2 bg-violet-50 rounded-lg shadow">
                <ul class="list-outside w-full py-2 space-y-4 text-gray-600">

                    @auth
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <div :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                    class="w-full bg-violet-600 py-2 px-4 rounded-3xl shadow font-semibold text-white cursor-pointer">
                                    {{ __('Log Out') }}
                                </div>
                            </form>
                        </li>
                    @else
                        <li
                            class="hover:bg-white hover:text-violet-600 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
                            <a href="{{ route('login') }}">Login</a>
                        </li>
                        <li
                            class="hover:bg-white hover:text-violet-600 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</div>
