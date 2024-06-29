<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trend Treasure</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col lg:flex-row justify-between items-start">
        <div class="basis-1/5 border-r border-gray-200">
            <div class="py-2 px-4 text-xl h-16 leading-10 border-b-2 border-gray-100">
                <i class="fa-solid fa-bag-shopping text-violet-500"></i> Trend<span class="font-semibold">Treasure</span>
            </div>
            <div class="p-4 lg:hidden">
                navbar mobile
            </div>
            <div class="px-4 py-2">
                <h3 class="text-xl font-semibold">Category</h3>
                <ul class="list-outside pl-4 py-2 space-y-2 text-gray-600">
                    <li>T-shirt</li>
                    <li>Sweatshirt</li>
                    <li>Dress</li>
                    <li>Pants & Skirt</li>
                    <li>Shoes</li>
                    <li>Accessories</li>
                </ul>

                <hr />

                <h2 class="text-xl font-semibold py-2">Filter By:</h2>
                <h3 class="text-lg font-semibold py-2">Type</h3>
                <ul class="list-outside pl-4 py-2 space-y-2 text-gray-600">
                    <li>T-shirt</li>
                    <li>Sweatshirt</li>
                    <li>Dress</li>
                    <li>Pants & Skirt</li>
                    <li>Shoes</li>
                    <li>Accessories</li>
                </ul>
            </div>
        </div>
        <div class="md:basis-4/5 w-full">
            <div class="py-2 px-4 h-16 border-b-2 border-gray-100 hidden md:flex justify-between">
                <div class="relative">
                    <input type="text" class="outline-none border-none bg-violet-50 shadow rounded-3xl w-72"
                        placeholder="Search Products">
                    <i class="fas fa-search absolute right-3 top-3 text-violet-600"></i>
                </div>
                <div class="flex justify-between items-center space-x-4">
                    <a href="#" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
                        <span class="text-base pr-2">Your Cart</span>
                        <i class="fa-lg fa-solid fa-cart-shopping"></i>
                    </a>
                    <a href="#" class="px-4 py-2 text-violet-600 bg-violet-50 rounded-3xl shadow text-center">
                        <span class="text-base pr-2"> Wishlist </span>
                        <i class="fa-lg fa-regular fa-heart"></i>
                    </a>
                    <img src="{{ asset('images/special.jpg') }}" alt="avatar"
                        class="w-10 h-10 rounded-full object-cover">
                </div>
            </div>
            <div class="p-4">
                <div class="grid grid-flow-row md:grid-cols-3 gap-4 h-40">
                    <div class="rounded-lg shadow w-full h-32 bg-violet-50 relative">
                        <div class="image h-32">
                            <img src="{{ asset('images/homepage.jpg') }}" alt="image"
                                class="rounded-t-lg bg-violet-200 w-full h-full object-cover">
                        </div>
                        <a href="#"
                            class="absolute bottom-2 left-2 bg-violet-600 text-white py-2 px-4 rounded-3xl shadow">Best
                            Seller</a>
                    </div>
                    <div class="rounded-lg shadow w-full h-32 bg-violet-50 relative">
                        <div class="image h-32">
                            <img src="{{ asset('images/dal_makhni.jpg') }}" alt="image"
                                class="rounded-t-lg bg-violet-200 w-full h-full object-cover">
                        </div>
                        <a href="#"
                            class="absolute bottom-2 left-2 bg-violet-600 text-white py-2 px-4 rounded-3xl shadow">New
                            Arrivals</a>
                    </div>
                    <div class="rounded-lg shadow w-full h-32 bg-violet-50 relative">
                        <div class="image h-32">
                            <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                class="rounded-t-lg bg-violet-200 w-full h-full object-cover">
                        </div>
                        <a href="#"
                            class="absolute bottom-2 left-2 bg-violet-600 text-white py-2 px-4 rounded-3xl shadow">Popular</a>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>

                    <div class="rounded-lg shadow w-full border border-gray-50">
                        <div class="relative">
                            <div class="image">
                                <img src="{{ asset('images/recipe_image.png') }}" alt="image"
                                    class="rounded-lg bg-gray-200  w-full h-56 object-cover">
                            </div>
                            <a href="#"
                                class="absolute top-4 left-2 text-violet-600 bg-violet-50 py-2 px-4 rounded-3xl shadow">Popular</a>
                            <a href="#"
                                class="absolute top-4 right-2 text-violet-600 bg-violet-50 py-2 px-3 rounded-3xl shadow">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                        </div>
                        <h3 class="text-lg font-semibold p-2 pb-0">Sweatshirt For Women</h3>
                        <div class="flex justify-between items-center p-2 pt-0">
                            <h3 class="text-lg font-semibold">
                                <span class="text-gray-500 text-base">Price:</span>
                                250 Rs.
                            </h3>
                            <a href="#"
                                class="py-2 px-3 bg-violet-600 text-violet-50 rounded-3xl shadow text-center">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
