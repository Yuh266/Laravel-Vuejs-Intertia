<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    
    public function index()
    {
        // Lấy danh sách sản phẩm từ cơ sở dữ liệu
        $products = Product::all(); // Phân trang 10 sản phẩm mỗi trang
        $products = Product::orderBy('created_at', 'desc')->paginate(10);

        // return $products;

        // Trả về view với danh sách sản phẩm
        return Inertia::render('Products/Index', [
            'products' => $products,
        ]);
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return Inertia::render('Products/Show', [
            'product' => $product,
        ]);
    }
    public function create()
    {
        return Inertia::render('Products/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return Inertia::render('Products/Edit', [
            'product' => $product,
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    

}
