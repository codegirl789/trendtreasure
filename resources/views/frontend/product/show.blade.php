<x-main-layout>
    <x-frontend.breadcrumb-product>
        Sweatshirt
    </x-frontend.breadcrumb-product>

    <div class="flex justify-between items-start space-x-4">
        <div class="image basis-1/3 w-80 h-80">
            <img src="{{ asset('products/02.png') }}" alt="product image"
                class="rounded-lg shadow object-cover bg-gray-50 w-full h-full">
        </div>
        <div class="content basis-2/3 text-gray-600">
            <h1 class="font-semibold text-xl text-gray-900">Dark wodden dinner set of 6</h1>
            <div class="text-xl py-2">
                <span class="text-gray-500 line-through">MRP. 20,000</span>
                <span class="font-semibold px-2 text-gray-800">Rs. 16,000</span>
                <span class="py-1 px-2 rounded-3xl shadow bg-violet-100 text-sm">SAVE Rs. 4,000</span>
            </div>
            <p>(inclusive of all taxes)</p>
            <div class="flex items-center space-x-2 pt-2 ">
                <div class="stars">
                    <i class="fa-solid fa-star text-orange-400"></i>
                    <i class="fa-solid fa-star text-orange-400"></i>
                    <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                    <i class="fa-regular fa-star text-orange-400"></i>
                    <i class="fa-regular fa-star text-orange-400"></i>
                </div>
                <div class="reviews">
                    2 reviews
                </div>
            </div>
            <p class="py-1">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis tempora maiores magni voluptas
                atque
                exercitationem ipsa sunt numquam deleniti, aspernatur qui molestias est reiciendis illo eos temporibus
                explicabo praesentium. Odio?
            </p>

            <div class="flex justify-between items-center space-x-2 py-3">
                <div class="basis-44 bg-gray-100 py-2 px-4 rounded-xl shadow">
                    <span>-</span>
                    <span class="px-8 font-semibold">1</span>
                    <span>+</span>
                </div>
                <button class="w-full py-2 rounded-3xl shadow  bg-gray-100 hover:bg-gray-200 ">Add to
                    cart</button>
                <div class="basis-12">
                    <i
                        class="fa-regular fa-lg text-violet-700 bg-gray-100 w-10 h-10 rounded-full text-center shadow leading-10 fa-heart"></i>
                </div>
            </div>

            <button class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white">Buy
                Now</button>
        </div>
    </div>

    <div class="mt-4 py-2">
        <h3 class="font-semibold text-xl pl-2">Customer Reviews</h3>

        <button class="mt-4 mr-2 py-2 px-6 rounded-3xl shadow bg-violet-500 text-white">Write a review</button>
        <button class="py-2 px-6 rounded-3xl shadow bg-violet-50 text-violet-600">Ask a question</button>

        <div class="py-2">
            <div class="review bg-gray-50  p-4 my-4 rounded-lg flex justify-between items-start space-x-4">
                <div class="basis-1/4 flex justify-center space-x-4 ">
                    <img src="{{ asset('avatars/avatar-1.png') }}" alt="user image"
                        class="w-12 h-12 rounded-full shadow">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-gray-800">User Name</span>
                        <span class="text-base text-gray-400">India</span>
                    </div>
                </div>
                <div class="w-full pl-4 border-l border-gray-300">
                    <div class="stars">
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore corrupti. Consectetur,
                        veritatis eligendi. Laboriosam nemo repudiandae amet, voluptas excepturi, natus quaerat ratione
                        nihil aspernatur, corrupti tempore molestias beatae aperiam?
                    </p>
                </div>
            </div>

            <div class="review bg-gray-50  p-4 my-4 rounded-lg flex justify-between items-start space-x-4">
                <div class="basis-1/4 flex justify-center space-x-4 ">
                    <img src="{{ asset('avatars/avatar-1.png') }}" alt="user image"
                        class="w-12 h-12 rounded-full shadow">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-gray-800">User Name</span>
                        <span class="text-base text-gray-400">India</span>
                    </div>
                </div>
                <div class="w-full pl-4 border-l border-gray-300">
                    <div class="stars">
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore corrupti. Consectetur,
                        veritatis eligendi. Laboriosam nemo repudiandae amet, voluptas excepturi, natus quaerat ratione
                        nihil aspernatur, corrupti tempore molestias beatae aperiam?
                    </p>
                </div>
            </div>

            <div class="review bg-gray-50  p-4 my-4 rounded-lg flex justify-between items-start space-x-4">
                <div class="basis-1/4 flex justify-center space-x-4 ">
                    <img src="{{ asset('avatars/avatar-1.png') }}" alt="user image"
                        class="w-12 h-12 rounded-full shadow">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-gray-800">User Name</span>
                        <span class="text-base text-gray-400">India</span>
                    </div>
                </div>
                <div class="w-full pl-4 border-l border-gray-300">
                    <div class="stars">
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore corrupti. Consectetur,
                        veritatis eligendi. Laboriosam nemo repudiandae amet, voluptas excepturi, natus quaerat ratione
                        nihil aspernatur, corrupti tempore molestias beatae aperiam?
                    </p>
                </div>
            </div>

            <div class="review bg-gray-50  p-4 my-4 rounded-lg flex justify-between items-start space-x-4">
                <div class="basis-1/4 flex justify-center space-x-4 ">
                    <img src="{{ asset('avatars/avatar-1.png') }}" alt="user image"
                        class="w-12 h-12 rounded-full shadow">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-gray-800">User Name</span>
                        <span class="text-base text-gray-400">India</span>
                    </div>
                </div>
                <div class="w-full pl-4 border-l border-gray-300">
                    <div class="stars">
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore corrupti. Consectetur,
                        veritatis eligendi. Laboriosam nemo repudiandae amet, voluptas excepturi, natus quaerat ratione
                        nihil aspernatur, corrupti tempore molestias beatae aperiam?
                    </p>
                </div>
            </div>

            <div class="review bg-gray-50  p-4 my-4 rounded-lg flex justify-between items-start space-x-4">
                <div class="basis-1/4 flex justify-center space-x-4 ">
                    <img src="{{ asset('avatars/avatar-1.png') }}" alt="user image"
                        class="w-12 h-12 rounded-full shadow">
                    <div class="flex flex-col">
                        <span class="text-lg font-semibold text-gray-800">User Name</span>
                        <span class="text-base text-gray-400">India</span>
                    </div>
                </div>
                <div class="w-full pl-4 border-l border-gray-300">
                    <div class="stars">
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star text-orange-400"></i>
                        <i class="fa-solid fa-star-half-stroke text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                        <i class="fa-regular fa-star text-orange-400"></i>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, inventore corrupti. Consectetur,
                        veritatis eligendi. Laboriosam nemo repudiandae amet, voluptas excepturi, natus quaerat ratione
                        nihil aspernatur, corrupti tempore molestias beatae aperiam?
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-main-layout>
