<div class="rounded-lg shadow w-full h-32 bg-violet-50 relative">
    <div class="image h-32">
        <img src="{{ asset('images/recipe_image.png') }}" alt="image"
            class="rounded-lg bg-violet-200 w-full h-full object-cover">
    </div>
    <a href="#" class="absolute bottom-2 left-2 bg-violet-500 text-white py-2 px-4 rounded-3xl shadow">
        {{ $slot }}</a>
</div>
