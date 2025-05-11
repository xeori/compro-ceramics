<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
public function index(Request $request)
{
    $query = Product::with('category');

    if ($request->has('category') && $request->category != 'all') {
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('slug', $request->category); // Filter berdasarkan slug kategori
        });
    }

    if ($request->has('search')) {
        $query->where(function ($q) use ($request) {
            $q->where('name', 'like', '%' . $request->search . '%')
              ->orWhere('description', 'like', '%' . $request->search . '%');
        });
    }

    $products = $query->get();
      $products = $query->paginate(9)->withQueryString();
    $categories = Category::all();

    return view('product', compact('products', 'categories'));
}



}
