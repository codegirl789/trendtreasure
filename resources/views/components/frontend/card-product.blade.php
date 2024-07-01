<div class="rounded-lg shadow w-full border border-gray-50 bg-gray-50">
    <div class="relative">
        <div class="image">
            <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                class="rounded-t-lg bg-gray-200  w-full h-56 object-cover">
        </div>
        <a href="#"
            class="absolute top-4 left-2 text-violet-600 bg-white py-2 px-4 rounded-3xl shadow-sm">Popular</a>
        <a href="#" class="absolute top-4 right-2 text-violet-600 bg-white py-2 px-3 rounded-3xl shadow-sm">
            <i class="fa-regular fa-heart"></i>
        </a>
    </div>
    <h3 class="text-lg font-semibold p-2 pb-0">{{ $slot }}</h3>
    <div class="flex justify-between items-center p-2 pt-0">
        <h3 class="text-lg font-semibold">
            <span class="text-gray-500 text-base">Price:</span>
            250 Rs.
        </h3>
        <a href="#" class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow-sm text-center">
            <i class="fa-solid fa-cart-shopping"></i>
        </a>
    </div>
</div>
