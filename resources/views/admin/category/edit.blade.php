@extends('admin.layout.app')
@section('title')
    Cập nhật danh mục
@endsection
@section('content')
    <div class="container px-5">
        <h1 class="h3 mb-3 text-center">Cập Nhật Danh Mục</h1>
        <a href="{{ route('category.index') }}" class="btn btn-warning mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Quay lại</a>
        <div class="card bg-light">
            <div class="card-body">
                <form action="{{ route('category.update', $category) }}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Tên Danh Mục</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') ?? $category->name }}">
                            @error('name')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="mb-3 col-6">
                            <label class="form-label">Trạng Thái</label>
                            <select class="form-select" name="status">
                                <option>-- Chọn trạng thái --</option>
                                <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Hiện Thị</option>
                                <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Ẩn</option>
                            </select>
                            @error('status')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>  
                        <div class="col-12 text-right">
                            <button class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
