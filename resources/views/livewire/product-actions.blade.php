<div>
    <div class="flex justify-between items-center space-x-2 py-3">
        <div class="basis-44 flex justify-between bg-gray-100 py-2 px-4 rounded-xl shadow">
            <span wire:click="decrement">
                <i class="fa-solid fa-minus cursor-pointer"></i>
            </span>
            <span class="px-8 font-semibold">{{ $number }}</span>
            <span wire:click="increment">
                <i class="fa-solid fa-plus cursor-pointer"></i>
            </span>
        </div>

        @auth
            <button wire:click="Addtocart"
                class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white ">
                Add to cart
            </button>
        @else
            <a href="{{ route('login') }}" class="w-full ">
                <button class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white ">
                    Login to Add to cart
                </button>
            </a>
        @endauth

        <div class="basis-12">
            <i
                class="fa-regular fa-lg text-violet-700 bg-gray-100 hover:bg-gray-200 w-10 h-10 rounded-full text-center shadow leading-10 fa-heart"></i>
        </div>
    </div>

    {{-- @auth
        <a href="{{ route('checkout.index') }}">
            <button class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white">
                Buy Now
            </button>
        </a>
    @else
        <a href="{{ route('login') }}">
            <button class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white">
                Login to Buy Now
            </button>
        </a>
    @endauth --}}

</div>
