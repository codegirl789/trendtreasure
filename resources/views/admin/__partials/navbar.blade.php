<div class="py-2 px-4 h-16 hidden md:flex justify-between items-center shadow">
    <div class="relative">
        <input type="text" class="outline-none border-none bg-violet-50 shadow rounded-3xl w-72"
            placeholder="Search Products">
        <i class="fas fa-search absolute right-3 top-3 text-violet-600"></i>
    </div>
    <div class="flex justify-between items-center space-x-6 pr-4">
        <a href="#" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
            <span class="text-base pr-2">Your Cart</span>
            <i class="fa-lg fa-solid fa-cart-shopping"></i>
        </a>
        <a href="#" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
            <span class="text-base pr-2"> Wishlist </span>
            <i class="fa-lg fa-regular fa-heart"></i>
        </a>
        <div class="relative z-50 flex justify-between items-center pl-8 space-x-2" x-data="{ adminDropdownOpen: false }">
            @auth
                <span class="text-gray-700 text-base">Welcome, <strong>{{ Auth::user()->username }}</strong> </span>
            @endauth
            <img @click="adminDropdownOpen = !adminDropdownOpen" src="{{ asset(Auth::user()->image) }}" alt="avatar"
                class="w-10 h-10 rounded-full object-cover cursor-pointer">
            <div x-cloaked x-show="adminDropdownOpen" x-transition.oen.top.left.duration.500ms
                @click.away="adminDropdownOpen=false" @keydown.escape.window="adminDropdownOpen=false"
                class="absolute w-60 h-max p-3 top-12 right-2 bg-violet-50 rounded-lg shadow">
                <ul class="list-outside w-full py-2 space-y-4 text-gray-600">
                    <li
                        class="hover:bg-white hover:text-violet-600 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
                        <a href="{{ route('profile.edit', 1) }}">Profile Settings</a>
                    </li>
                    <li
                        class="hover:bg-white hover:text-violet-600 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
                        <a href="{{ route('category.show', 2) }}"> Settings</a>
                    </li>
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

                </ul>
            </div>
        </div>

    </div>
</div>
