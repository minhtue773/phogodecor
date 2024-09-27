<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImagesProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrapFive();

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(8);
        return view('admin.category.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name',
            'status' => 'required|in:0,1'
        ],[
            'name.required' => 'Tên danh mục không được bỏ trống',
            'name.unique' => 'Tên này đã tồn tại trong hệ thống',
            'status.in' => 'Bạn hãy chọn trạng thái'
        ]);
        try {
            Category::create($request->all());
            return redirect()->route('category.index')->with('ok', 'Thêm danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Thêm danh mục thất bại');
        }
    }

    public function show(Category $category)
    {
        
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|unique:categories,name,'.$category->id,
            'status' => 'required|in:0,1'
        ],[
            'name.required' => 'Tên danh mục không được bỏ trống',
            'name.unique' => 'Tên này đã tồn tại trong hệ thống',
            'status.in' => 'Bạn hãy chọn trạng thái'
        ]);
        try {
            $category->update($request->all());
            return redirect()->route('category.index')->with('ok', 'Cập nhật danh mục thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('ok', 'Cập nhật danh mục thất bại');
        }
    }

    public function destroy(Category $category)
    {
        $products = $category->Products()->withTrashed()->get();

        $products->each(function ($product) {
            $imagesPro = ImagesProduct::where('product_id',$product->id);
            $imagesPro->delete();
            $product->forceDelete();
        });

        $category->delete();

        return redirect()->back()->with('ok', 'Danh mục đã được xóa thành công.');
    }
}
