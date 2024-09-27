@extends('admin.layout.app')
@section('title')
    Thùng rác
@endsection
@section('content')
<div class="container px-5">
    <h1 class="h3 mb-3 text-center">Sản Phẩm Đã Xóa</h1>
    <a href="{{ route('product.index') }}" class="btn btn-primary mb-3">Xem danh sách sản phẩm</a>
    <div class="row mb-3">
        <div class="col-3">
            <form method="GET">
                @csrf
                <div class="input-group">
                    <input name="keyword" type="search" class="form-control bg-light border-2 small" placeholder="Tìm sản phẩm..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @if ($products->isNotEmpty())
        <table class="table table-bordered table-hover table-responsive">
            <thead class="table-info text-center">
                <tr>
                    <th width="20%">Hình</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Giảm Giá</th>
                    <th>Stock</th>
                    <th>Status</th>
                    <th colspan="3">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $row)
                    <tr>
                        <td class="align-middle text-center"><img src="{{ $row->image }}" class="img-thumbnail w-25 h-25"></td>
                        <td class="align-middle">{{ $row->name }}</td>
                        <td class="align-middle">{{ $row->Category->name }}</td>
                        <td class="align-middle text-center">{{ number_format($row->price,0,'.','.') }} đ</td>
                        <td class="align-middle text-center">{{ $row->discount_price }}</td>
                        <td class="align-middle text-center">{{ $row->stock }}</td>
                        <td class="align-middle text-center">{{ $row->status }}</td>
                        <td class="align-middle text-center">
                            <a href="{{ route('product.restore', $row) }}" class="text-success"><i class="fa-solid fa-rotate-left"></i></a>
                        </td>
                        <td class="align-middle text-center">
                            <a onclick="return confirm('Bạn có chắc chắn muốn xóa {{ $row->name }} vĩnh viễn không?')" href="{{ route('product.forceDelete', $row) }}" class="text-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="align-middle" colspan="9">
                        <div class="row d-flex align-items-center">
                            <div class="col">
                                {{ $products->onEachSide(1)->links() }}
                            </div>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    @else
        <h1 class="mt-4 text-secondary text-center">Không Tìm Thấy Sản Phẩm Nào!!!!</h1>
    @endif
    
</div>
@endsection