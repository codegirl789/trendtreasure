<x-main-layout>
    <div class="mb-1 text-base pb-2 text-gray-600">
        <a href="/" class="font-semibold text-gray-800"><i class="fa-solid fa-house"></i> Home</a> <i
            class="fa-solid fa-angle-right fa-xs px-1 text-gray-400"></i>
        <span>Orders</span>
    </div>

    <h2 class="text-2xl text-center font-semibold">Your Orders</h2>

    <div class="py-4">

        <div class="grid grid-cols-8 bg-gray-50 rounded-lg shadow font-semibold py-2 px-4">
            <span>Number</span>
            <span class="col-span-2">Name</span>
            <span>Price</span>
            <span>Quantity</span>
            <span>Status</span>
            {{-- <span>&nbsp;&nbsp;&nbsp;&nbsp;Actions</span> --}}
        </div>

        @foreach (Auth::user()->OrderItems as $key => $orderItem)
            <div class="grid grid-cols-8 my-1 bg-gray-50 rounded-lg shadow py-2 px-4">
                <span>{{ $key + 1 }}</span>
                <a href="{{ route('product.show', $orderItem->product->id) }}"
                    class="col-span-2">{{ $orderItem->product->name }}</a>
                <span>{{ $orderItem->product->price }}</span>
                <span>{{ $orderItem->quantity }}</span>
                <span
                    class="py-1 px-2 rounded-3xl bg-violet-500 text-white text-center ">{{ Auth::user()->Order->paymentDetail->status }}</span>
                {{-- <span>
                    <form action="{{ route('orderItem.destroy', $orderItem->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit"><i class="fa-solid fa-trash text-red-500 "></i></button>
                    </form>
                </span> --}}
            </div>
        @endforeach

        <div class="grid grid-cols-8 my-1 bg-gray-50 rounded-lg shadow py-2 px-4">
            <div class="col-span-5"></div>
            <div>Grand Total</div>
            <span class="font-semibold fa-lg pt-3">{{ Auth::user()->Order->total_price }} Rs.</span>
        </div>


    </div>
</x-main-layout>
