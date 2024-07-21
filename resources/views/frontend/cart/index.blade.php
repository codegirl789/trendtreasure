<x-main-layout>
    <div class="mb-1 text-base pb-2 text-gray-600">
        <a href="/" class="font-semibold text-gray-800"><i class="fa-solid fa-house"></i> Home</a> <i
            class="fa-solid fa-angle-right fa-xs px-1 text-gray-400"></i>
        <span>Cart</span>
    </div>

    <h2 class="text-2xl text-center font-semibold">Your Cart</h2>

    <div class="py-4">

        <div class="grid grid-cols-8 bg-gray-50 rounded-lg shadow font-semibold py-2 px-4">
            <span>Number</span>
            <span class="col-span-2">Name</span>
            <span>Price</span>
            <span>Quantity</span>
            <span>Discount</span>
            <span>Total</span>
            <span>Actions</span>
        </div>

        @foreach (Auth::user()->Carts as $key => $cart)
            <div class="grid grid-cols-8 my-1 bg-gray-50 rounded-lg shadow py-2 px-4">
                <span>{{ $key + 1 }}</span>
                <a href="{{ route('product.show', $cart->product->id) }}"
                    class="col-span-2">{{ $cart->product->name }}</a>
                <span>{{ $cart->product->price }}</span>
                <span>{{ $cart->quantity }}</span>
                <span>{{ $cart->product->discount }}</span>
                <span class="font-semibold">{{ $cart->total }} Rs.</span>

                <span>
                    <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa-solid fa-trash text-red-500"></i></button>
                    </form>
                </span>
            </div>
        @endforeach

        <div class="grid grid-cols-8 my-1 bg-gray-50 rounded-lg shadow py-2 px-4">
            <div class="col-span-5"></div>
            <div>Grand Total</div>
            <span class="font-semibold fa-lg pt-3">{{ $cartTotal }} Rs.</span>
        </div>

        <a href="{{ route('checkout.index') }}"
            class="mt-4 flex justify-center items-center py-2 px-4 rounded-3xl bg-violet-50 text-violet-700 font-semibold uppercase">
            Proceed to checkout
            <i class="fa-solid fa-cart-shopping pl-1"></i>
        </a>
    </div>
</x-main-layout>
