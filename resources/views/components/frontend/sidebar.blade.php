<div class="px-4 py-2 shadow max-h-max">
    <h3 class="text-xl font-semibold">Categories</h3>
    <ul class="list-outside pl-4 py-2 space-y-2 text-gray-600">
        @foreach ($sidebarCategories as $key => $category)
            <li>
                <a href="{{ route('category.show', 2) }}"
                    class="{{ $key == 0 ? 'text-violet-600 font-semibold' : '' }}">{{ $category->name }}</a>
            </li>
        @endforeach
        {{-- <li>
            <a href="{{ route('category.show', 2) }}">T-shirt</a>
        </li>
        <li>
            <a href="{{ route('category.show', 2) }}" class="">Sweatshirt</a>
        </li>
        <li>
            <a href="{{ route('category.show', 2) }}">Dress</a>
        </li>
        <li>
            <a href="{{ route('category.show', 2) }}">Pants & Skirt</a>
        </li>
        <li>
            <a href="{{ route('category.show', 2) }}">Shoes</a>
        </li>
        <li>
            <a href="{{ route('category.show', 2) }}">Accessories</a>
        </li> --}}
    </ul>

    <hr />

    {{-- <h2 class="text-xl font-semibold py-2">Filter By:</h2>
    <h3 class="text-lg font-semibold py-2">Type</h3>
    <ul class="list-outside pl-4 py-2 space-y-2 text-gray-600">
        <li>T-shirt</li>
        <li>Sweatshirt</li>
        <li>Dress</li>
        <li>Pants & Skirt</li>
        <li>Shoes</li>
        <li>Accessories</li> 
    </ul> --}}
</div>
