<div class="px-4 py-2 shadow">
    {{-- <h3 class="text-xl font-semibold py-2 ">Admin Panel</h3> --}}
    <ul class="list-outside w-full py-2 space-y-3 text-gray-600 h-screen">

        <li class="w-full bg-violet-100 py-2 px-4 rounded-3xl shadow font-semibold text-violet-800 cursor-pointer">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </li>
        <li
            class="hover:bg-violet-100 hover:text-gray-800 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
            <a href="{{ route('admin.product.create') }}">All Products</a>
        </li>
        <li
            class="hover:bg-violet-100 hover:text-gray-800 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
            <a href="{{ route('admin.product.create') }}">Add New Product</a>
        </li>
        <li
            class="hover:bg-violet-100 hover:text-gray-800 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
            <a href="{{ route('admin.product.create') }}">All Categories</a>
        </li>
        <li
            class="hover:bg-violet-100 hover:text-gray-800 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
            <a href="{{ route('admin.product.create') }}">Add New Category</a>
        </li>
        <li
            class="hover:bg-violet-100 hover:text-gray-800 hover:font-semibold hover:py-2 px-4 hover:rounded-3xl hover:shadow transition-all cursor-pointer">
            <a href="{{ route('admin.product.create') }}">All Users</a>
        </li>
    </ul>
</div>
