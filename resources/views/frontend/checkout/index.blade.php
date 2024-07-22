<x-main-layout>
    <div class="flex justify-between items-center pb-3">
        <div class="basis-96 text-base text-gray-600">
            <a href="/" class="font-semibold text-gray-800"><i class="fa-solid fa-house"></i> Home</a> <i
                class="fa-solid fa-angle-right fa-xs px-1 text-gray-400"></i>
            <span>Checkout</span>
        </div>

        <h2 class="w-full text-2xl text-center font-semibold">Checkout</h2>
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="border border-r-2 border-gray-100 p-2 rounded-3xl">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="py-2">
                    <p class="w-full font-semibold text-lg pb-2">Delivery Address</p>
                    <div class="flex justify-between items-center space-x-2">
                        <input type="text" name="country"
                            value="{{ $address != null ? $address->country : 'India' }}"
                            class="w-full outline-none border-none bg-violet-100 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Country" readonly>
                        <input type="text" name="name" value="{{ $address != null ? $address->name : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Name">
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <input type="text" name="address" value="{{ $address != null ? $address->address : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Address">
                        <input type="text" name="apartment" value="{{ $address != null ? $address->apartment : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Apartment">
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <input type="text" name="city" value="{{ $address != null ? $address->city : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="City">
                        <input type="text" name="state" value="{{ $address != null ? $address->state : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="State">
                    </div>
                    <div class="flex justify-between items-center space-x-2">
                        <input type="text" name="pincode" value="{{ $address != null ? $address->pincode : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Pincode">
                        <input type="text" name="phone" value="{{ $address != null ? $address->phone : '' }}"
                            class="w-full outline-none border-none bg-violet-50 rounded-3xl shadow placeholder:text-black my-1 focus:ring-1 focus:ring-violet-300"
                            placeholder="Phone Number">
                    </div>
                </div>


                <div class="pb-2 pt-4">
                    <hr>
                </div>

                <div>
                    <p class="w-full font-semibold text-lg">Payment</p>
                    <div class="flex flex-col space-y-2 mx-2 py-1">
                        <div class="">
                            <input type="radio" id="payment" name="payment" value="GPay" disabled>
                            <label class="cursor-pointer" for="GPay">GPay</label>
                        </div>
                        <div class="">
                            <input type="radio" id="payment" name="payment" value="PayPal" disabled>
                            <label class="cursor-pointer" for="PayPal">PayPal</label>
                        </div>
                        <div class="">
                            <input type="radio" id="payment" name="payment" value="CashOnDelivery" checked>
                            <label class="cursor-pointer" for="CashOnDelivery">Cash On Delivery</label>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="my-3 w-full text-lg pb-2  bg-violet-500 text-white rounded-lg shadow font-semibold py-2 px-4">
                    Pay Now
                </button>
            </form>
        </div>
        <div class="py-2">
            <p class="w-full text-lg pb-2  bg-violet-50 rounded-lg shadow font-semibold py-2 px-4">Cart
                Items</p>
            <div class="grid grid-cols-5 bg-white rounded-lg shadow font-semibold py-2 px-4">
                <span>Number</span>
                <span class="col-span-2">Name</span>
                <span class="pl-4">Total</span>
                <span>Actions</span>
            </div>

            @foreach (Auth::user()->Carts as $key => $cart)
                <div class="grid grid-cols-5 my-1 bg-white rounded-lg shadow py-2 px-4">
                    <span class="pl-4">{{ $key + 1 }}</span>
                    <a href="{{ route('product.show', $cart->product->id) }}"
                        class="col-span-2">{{ $cart->product->name }}</a>
                    <span class="font-semibold pl-4">{{ $cart->total }} Rs.</span>

                    <span>
                        <form action="{{ route('cart.destroy', $cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"><i class="fa-solid fa-trash text-red-500 pl-4"></i></button>
                        </form>
                    </span>
                </div>
            @endforeach

            <div class="grid grid-cols-5 my-1 bg-white rounded-lg shadow py-2 px-4">
                <div class="col-span-2"></div>
                <div>Grand Total</div>
                <span class="font-semibold fa-lg pt-3">{{ $cartTotal }} Rs.</span>
            </div>

        </div>

    </div>

</x-main-layout>
