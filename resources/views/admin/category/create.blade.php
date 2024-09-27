@extends('admin.layout.app')
@section('title')
    Thêm danh mục
@endsection
@section('content')
    <div class="container px-5">
        <h1 class="h3 mb-3 text-center">Thêm Danh Mục Mới</h1>
        <a href="{{ route('category.index') }}" class="btn btn-warning mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Quay lại</a>
        <div class="card bg-light">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf
                        <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" placeholder="Nhập danh mục...." name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="mb-3 col-6">
                            <label class="form-label">Trạng Thái</label>
                            <select class="form-select" name="status">
                                <option>-- Chọn trạng thái --</option>
                                <option value="0">Hiện Thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                            @error('status')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="col-12 text-right">
                            <button class="btn btn-primary">Thêm Mới</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
