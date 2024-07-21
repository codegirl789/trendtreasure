<x-main-layout>
    <x-frontend.breadcrumb-category :category="$category">
    </x-frontend.breadcrumb-category>

    <x-frontend.simple-flex>
        <h2 class="text-3xl font-semibold">{{ ucfirst($category->name) }}</h2>
        {{-- <select name="" id=""
            class="outline-none border-none rounded-3xl shadow py-2 bg-violet-50 text-violet-600 placeholder:text-red-800">
            <option value="#">Sort By : Popular</option>
        </select> --}}
    </x-frontend.simple-flex>

    {{-- <div class="py-2 flex space-x-4">
        <div class="relative w-32 py-2 px-4 rounded-3xl shadow bg-violet-50 text-gray-600">
            <a href="#">hjhkj</a>
            <i class="fa-solid fa-xmark absolute top-3 right-3 cursor-pointer"></i>
        </div>
        <div class="relative w-32 py-2 px-4 rounded-3xl shadow bg-violet-50 text-gray-600">
            <a href="#">hjhkj</a>
            <i class="fa-solid fa-xmark absolute top-3 right-3 cursor-pointer"></i>
        </div>
        <div class="relative w-32 py-2 px-4 rounded-3xl shadow bg-violet-50 text-gray-600">
            <a href="#">hjhkj</a>
            <i class="fa-solid fa-xmark absolute top-3 right-3 cursor-pointer"></i>
        </div>
        <div class="relative w-32 py-2 px-4 rounded-3xl shadow bg-violet-50 text-gray-600">
            <a href="#">hjhkj</a>
            <i class="fa-solid fa-xmark absolute top-3 right-3 cursor-pointer"></i>
        </div>
    </div> --}}

    <div class="grid grid-flow-row md:grid-cols-3 gap-4 py-2">
        @foreach ($category->Products as $product)
            <x-frontend.card-product :product="$product">
                {{ $product->name }}
            </x-frontend.card-product>
        @endforeach

    </div>

</x-main-layout>
