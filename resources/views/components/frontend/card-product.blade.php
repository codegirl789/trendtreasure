<div class="rounded-lg shadow w-full border border-gray-50 bg-gray-50">
    <div class="relative pb-2">
        <div class="image">
            <a href="{{ route('product.show', $product->id) }}">
                <img src="{{ asset($product->image) }}" alt="image" class="rounded-t-lg   w-full h-56 object-cover">
            </a>
        </div>
        <a href="{{ route('category.show', $product->Category->id) }}"
            class="absolute top-4 left-2 text-violet-600 bg-white py-2 px-4 rounded-3xl shadow-sm">{{ $product->Category->name }}</a>
        <a href="#" class="absolute top-4 right-2 text-violet-600 bg-white py-2 px-3 rounded-3xl shadow-sm">
            <i class="fa-regular fa-heart"></i>
        </a>
    </div>

    <a href="{{ route('product.show', $product->id) }}" class="p-2 text-lg font-semibold">{{ $slot }}</a>

    <div class="flex justify-between items-center p-2 pt-0">
        <h3 class="text-lg font-semibold">
            <span class="text-gray-500 text-base">Price:</span>
            {{ $product->price }} Rs.
        </h3>
        <span class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow-sm text-center">
            <i class="fa-solid fa-cart-shopping"></i>
        </span>
    </div>
</div>
