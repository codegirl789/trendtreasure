<div class="relative">
    <form wire:submit.prevent="searchForm">
        <input type="text" wire:model="search" class="outline-none border-none bg-violet-50 shadow rounded-3xl w-72"
            placeholder="Search Products">
        <i class="fas fa-search absolute right-3 top-3 text-violet-600"></i>
        {{-- <input type="text" placeholder="Search" 
            class="w-full lg:w-64 outline-none border-none py-2 px-4 rounded-3xl  shadow-insettt focus:ring-1 focus:ring-pink"> --}}
    </form>
    @if (!empty($search))
        <div
            class=" transition-all duration-75
             absolute z-50 w-full lg:w-72 overflow-hidden bg-violet-50 p-3 top-12 right-18 rounded-xl shadow py-2">
            @if ($products->count() > 0)
                <ul class="flex flex-col space-y-1">
                    @forelse ($products as $product)
                        <a href="{{ route('product.show', $product->id) }}">
                            <li>
                                <p class="text-justify capitalize">{{ $product->name }} <i
                                        class="fa-solid fa-sm fa-arrow-up-right-from-square"></i></p>
                            </li>
                        </a>
                    @empty
                        <p>no results found</p>
                    @endforelse
                </ul>
            @else
                <p>no results found</p>
            @endif
        </div>
    @endif
</div>
