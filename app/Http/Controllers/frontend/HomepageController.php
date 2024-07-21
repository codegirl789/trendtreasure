<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();
        $products = Product::latest()->get();
        return view('homepage', compact('categories', 'products'));
    }
}
