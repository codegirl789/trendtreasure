<x-main-layout>
    <div class="grid grid-flow-row md:grid-cols-3 gap-4 h-40">
        <x-frontend.card-highlight>
            Best Seller
        </x-frontend.card-highlight>
        <x-frontend.card-highlight>
            New Arrivals
        </x-frontend.card-highlight>
        <x-frontend.card-highlight>
            Popular
        </x-frontend.card-highlight>

        @foreach ($products as $product)
            <x-frontend.card-product :product="$product">
                {{ $product->name }}
            </x-frontend.card-product>
        @endforeach


    </div>
</x-main-layout>
