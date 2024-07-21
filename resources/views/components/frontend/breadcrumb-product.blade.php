<div class="mb-1 text-base pb-2 text-gray-600">
    <a href="/" class="font-semibold text-gray-800"><i class="fa-solid fa-house"></i> Home</a> <i
        class="fa-solid fa-angle-right fa-xs px-1 text-gray-400"></i>
    <a href="{{ route('category.show', $product->Category->id) }}">{{ $product->Category->name }}</a> <i
        class="fa-solid fa-angle-right fa-xs px-1 text-gray-400"></i>
    <a href="#" class="">{{ $product->name }}</a>
</div>
