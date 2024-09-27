@extends('admin.layout.app')
@section('title')
    Sản phẩm
@endsection
@section('content')
<div class="container px-5">
    <h1 class="h3 mb-3 text-center">Quản Lý Sản Phẩm</h1>
    <a href="{{ route('product.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus me-2"></i>Thêm sản phẩm mới</a>
    <div class="row mb-3 d-flex justify-content-between align-items-center">
        <div class="col-3">
            <form method="GET" id="searchForm">
                @csrf
                <div class="input-group">
                    <input id="searchInput" name="keyword" type="search" class="form-control bg-light border-2 small" placeholder="Tìm sản phẩm..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>      
        <div class="col-3">
            <div class="dropdown float-end">
                <button class="btn btn-outline-dark btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-arrow-down-a-z me-2"></i>Sắp xếp theo:
                </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'price', 'direction' => 'desc', 'keyword' => request('keyword')]) }}">Giá: Giảm dần</a></li>
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'price', 'direction' => 'asc', 'keyword' => request('keyword')]) }}">Giá: Tăng dần</a></li>
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'name', 'direction' => 'asc', 'keyword' => request('keyword')]) }}">Tên: A-Z</a></li>
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'name', 'direction' => 'desc', 'keyword' => request('keyword')]) }}">Tên: Z-A</a></li>
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'id', 'direction' => 'desc', 'keyword' => request('keyword')]) }}">Mới nhất</a></li>
                <li><a class="dropdown-item" href="{{ route('product.index', ['sort' => 'id', 'direction' => 'asc', 'keyword' => request('keyword')]) }}">Cũ nhất</a></li>    
            </ul>
            </div>
        </div>
    </div>
    @if ($products->isNotEmpty())
        <table class="table table-bordered table-hover table-responsive">
            <thead class="table-info text-center">
                <tr>
                    <th width="20%">Hình</th>
                    <th>Name</th>
                    <th>Category </th>
                    <th>Price </th>
                    <th>Giảm Giá (%)</th>
                    <th>Stock </th>
                    <th>Status </th>
                    <th colspan="3">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $row)
                    <tr>
                        <td class="align-middle text-center"><img src="{{ asset('uploads') }}/{{ $row->image }}" class="img-thumbnail w-25 h-25"></td>
                        <td class="align-middle">{{ $row->name }}</td>
                        <td class="align-middle">{{ $row->Category->name }}</td>
                        <td class="align-middle text-center">{{ number_format($row->price,0,'.','.') }} đ</td>
                        <td class="align-middle text-center">{{ $row->discount_price }}</td>
                        <td class="align-middle text-center">{{ $row->stock }}</td>
                        <td class="align-middle text-center">{{ $row->status }}</td>
                        <td class="align-middle text-center"><a href="{{ route('product.show', $row) }}" class="text-success"><i class="fa-regular fa-eye"></i></a></td>
                        <td class="align-middle text-center"><a href="{{ route('product.edit', $row) }}" class=""><i class="fa-regular fa-edit"></i></a></td>
                        <td class="align-middle text-center"><a href="{{ route('product.delete', $row) }}" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td class="align-middle" colspan="11">
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
@section('js')
@endsection