<x-admin-layout>
    <div class="rounded-lg shadow p-4">
        <x-admin.heading>Create New Product</x-admin.heading>
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-frontend.simple-flex class="space-x-2 py-0">
                <select required name="category_id"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                    <option value="">Select Category</option>
                    <option value="1">Category 1</option>
                    <option value="2">Category 2</option>
                    <option value="3">Category 3</option>
                </select>
                <input type="text" required placeholder="Name" name="name"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                <input type="file" name="image" id=""
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
            </x-frontend.simple-flex>
            <x-frontend.simple-flex class="space-x-2">
                <input type="text" placeholder="Size" name="size"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                <input type="text" placeholder="Color" name="color"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                <input type="text" placeholder="Price" name="price"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                <input type="text" required placeholder="Discount" name="discount"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
                <input type="text" placeholder="Quantity" name="quantity"
                    class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none">
            </x-frontend.simple-flex>

            <textarea required placeholder="Description" name="description" rows="3"
                class="w-full py-2 px-4 rounded-lg shadow  placeholder:text-gray-800 bg-violet-50 outline-none border-none"></textarea>

            <button type="submit"
                class="w-full py-2 px-4 rounded-3xl shadow  placeholder:text-gray-800 mt-4 outline-none bg-violet-50 text-violet-700 hover:bg-violet-200 font-semibold border-none">
                Add Product</button>
        </form>
    </div>
</x-admin-layout>
