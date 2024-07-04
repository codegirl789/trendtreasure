<div class="py-2 px-4 h-16 hidden md:flex justify-between items-center shadow">
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
        <img src="{{ asset('images/special.jpg') }}" alt="avatar" class="w-10 h-10 rounded-full object-cover">
    </div>
</div>
