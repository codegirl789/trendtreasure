<div>
    <div class="flex justify-between items-center space-x-2 py-3">
        <div class="basis-44 flex justify-between bg-gray-100 py-2 px-4 rounded-xl shadow">
            <span wire:click="decrement">
                <i class="fa-solid fa-minus cursor-pointer"></i>
            </span>
            <span class="px-8 font-semibold">{{ $number }}</span>
            <span wire:click="increment">
                <i class="fa-solid fa-plus cursor-pointer"></i>
            </span>
        </div>
        <button class="w-full py-2 rounded-3xl shadow  bg-gray-100 hover:bg-gray-200 ">
            Add to cart
        </button>
        <div class="basis-12">
            <i
                class="fa-regular fa-lg text-violet-700 bg-gray-100 hover:bg-gray-200 w-10 h-10 rounded-full text-center shadow leading-10 fa-heart"></i>
        </div>
    </div>
    <button class="w-full py-2 rounded-3xl shadow  bg-violet-600 hover:bg-violet-700 text-white">
        Buy Now
    </button>
</div>
