<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ImagesProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();
        if ($request->has('keyword')) {
            $search = $request->input('keyword');
            $query->whereAny(['name', 'price'],'like','%'.$search.'%');
        } 
        $sort = $request->input('sort', 'id');
        $direction = $request->input('direction', 'desc');
        $products = $query->orderBy($sort, $direction)->paginate(8)->withQuerystring();
        return view('admin.product.product', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    public function store(StoreProductRequest $request)
    {
        if ($request->hasFile('photo')) {
            $image = $request->file('photo');
            $imageName = time() . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $request->merge(['image' => $imageName]);
        }
        try {
            $product = Product::create($request->all());
            if ($product && $request->hasFile('photos')) {
                $images = $request->file('photos');
                foreach ($images as $image) {
                    $imageName = time() . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
                    ImagesProduct::create([
                        'product_id' => $product->id,
                        'image' => $imageName
                    ]);
                }
            }
            return redirect()->route('product.index')->with('ok', 'Thêm sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Thêm sản phẩm thất bại');
        }
    }

    public function show(Product $product)
    {
        $images_product = ImagesProduct::where('product_id', $product->id)->get();
        return view('admin.product.show', compact('product', 'images_product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $images_product = ImagesProduct::where('product_id', $product->id)->get();
        return view('admin.product.edit', compact('product', 'categories', 'images_product'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        if ($request->hasFile('photo')) {
            if (file_exists(public_path('uploads/') . $product->image)) {
                unlink(public_path('uploads/') . $product->image);
            }
            $image = $request->file('photo');
            $imageName = time() . $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);
            $request->merge(['image' => $imageName]);
        }
        try {
            $product->update($request->all());

            if ($request->hasFile('photos')) {
                $oldImages = ImagesProduct::where('product_id', $product->id)->get();
                foreach ($oldImages as $oldImage) {
                    if (file_exists(public_path('uploads/') . $oldImage->image)) {
                        unlink(public_path('uploads/') . $oldImage->image);
                    }
                    $oldImage->delete();
                }

                $images = $request->file('photos');
                foreach ($images as $image) {
                    $imageName = time() . $image->getClientOriginalName();
                    $image->move(public_path('uploads'), $imageName);
                    ImagesProduct::create([
                        'product_id' => $product->id,
                        'image' => $imageName
                    ]);
                }
            }

            return redirect()->route('product.index')->with('ok', 'Cập nhật sản phẩm thành công');
        } catch (\Throwable $th) {
            return redirect()->back()->with('no', 'Cập nhật sản phẩm thất bại');
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        flash()->success('Xóa sản phẩm thành công!');
        return redirect()->back();
    }

    public function trash(Request $request)
    {
        if($request->has('keyword')){
            $query = $request->input('keyword');
            $products = Product::onlyTrashed()->where('name', 'Like', '%'.$query.'%')->paginate(8);
        }else{
            $products = Product::onlyTrashed()->paginate(10);
        }
        return view('admin.product.trash', compact('products'));
    }
    public function restore($id)
    {
        $product = Product::onlyTrashed()->find($id);
        $product->restore();
        flash()->success('Khôi phục sản phẩm thành công.');
        return redirect()->back();
    }

    public function forceDelete($id)
    {
        try {
            $product = Product::onlyTrashed()->find($id);
            if ($product) {
                if (file_exists(public_path('uploads/') . $product->image)) {
                    unlink(public_path('uploads/') . $product->image);
                }
                $images = ImagesProduct::where('product_id', $product->id)->get();
                foreach ($images as $image) {
                    if (file_exists(public_path('uploads/') . $image->image)) {
                        unlink(public_path('uploads/') . $image->image);
                    }
                    $image->delete();
                }
                $product->forceDelete();
                flash()->success('Xóa sản phẩm thành công.');
                return redirect()->back();
            }
        } catch (\Throwable $th) {
            flash()->error('Xóa sản phẩm thất bại.');
            return redirect()->back();
        }
    }
}
