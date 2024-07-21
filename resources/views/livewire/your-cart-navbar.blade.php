<a href="{{ route('cart.index') }}" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
    <div class="text-base">Your Cart
        <i class="fa-lg fa-solid fa-cart-shopping pr-2"></i>
        @auth
            <span class="px-3 font-semibold py-1 text-center bg-white rounded-full shadow">
                @auth
                    {{ $cartCount }}
                @endauth
            </span>
        @endauth
    </div>
</a>
