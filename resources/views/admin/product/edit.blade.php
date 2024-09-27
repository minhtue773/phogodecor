@extends('admin.layout.app')
@section('title')
    Cập nhật sản phẩm
@endsection
@section('content')
    <div class="container px-5">
        <h1 class="h3 mb-3 text-center">Cập Nhật Sản Phảm Mới</h1>
        <a href="{{ route('product.index') }}" class="btn btn-warning mb-3"><i class="fa-solid fa-rotate-left me-2"></i>Quay
            lại</a>
        <div class="card bg-light">
            <div class="card-body">
                <form action="{{ route('product.update', $product) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Tên Sản Phẩm</label>
                            <input type="text" class="form-control" placeholder="Nhập tên sp...." name="name"
                                value="{{ $product->name ?? old('name') }}">
                            @error('name')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Danh Mục</label>
                            <select class="form-select" name="category_id">
                                <option>-- Chọn Danh Mục --</option>
                                @foreach ($categories as $row)
                                    <option value="{{ $row->id }}"
                                        {{ $product->category_id == $row->id ? 'selected' : '' }}>{{ $row->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Giá</label>
                            <input type="text" class="form-control" placeholder="Nhập giá sp...." name="price"
                                value="{{ $product->price ?? old('price') }}">
                            @error('price')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Giảm Giá(%)</label>
                            <input type="text" class="form-control" placeholder="Nhập giảm giá...." name="discount_price"
                                value="{{ $product->discount_price ?? old('discount_price') }}">
                            @error('discount_price')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Ảnh Sản Phẩm</label>
                            <input type="file" class="form-control" name="photo" onchange="readURL(this)">
                            @error('photo')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                            <div id="preview" class="mt-3 d-flex justify-content-center"></div>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Ảnh Liên Quan</label>
                            <input type="file" class="form-control" name="photos[]" multiple onchange="readURLs(this)">
                            @error('photos')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                            <div id="preview-photos" class="mt-3 d-flex justify-content-center">
                                @if ($images_product->isNotEmpty())
                                @foreach ($images_product as $row)
                                    <img src="{{ asset('uploads') }}/{{ $row->image }}" class="img-thumbnail mx-3" height="100" width="100">
                                @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Số Lượng</label>
                            <input type="text" class="form-control" placeholder="Nhập số lượng..." name="stock"
                                value="{{ $product->stock ?? old('stock') }}">
                            @error('stock')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Trạng Thái</label>
                            <select class="form-select" name="status">
                                <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>-- Chọn trạng thái --
                                </option>
                                <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>SP Hot</option>
                                <option value="2" {{ $product->status == 2 ? 'selected' : '' }}>SP Bán Chạy</option>
                            </select>
                            @error('status')
                                <span class="text-danger">* {{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-12">
                            <label class="form-label">Mô Tả Sản Phẩm</label>
                            <textarea name="description" id="editor">{{ $product->description }}</textarea>
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
@section('js')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                $('#preview').empty(); 
                var reader = new FileReader();
                reader.onload = function(e) {
                    let img = $('<img/>', {
                        src: e.target.result,
                        class: 'img-thumbnail',
                        width: 150,
                        height: 150,
                    });
                    $('#preview').append(img);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        function readURLs(input) {
            if (input.files) {
                $('#preview-photos').empty();
                // Duyệt qua tất cả các tệp được chọn
                for (let i = 0; i < input.files.length; i++) {
                    let reader = new FileReader();
                    reader.onload = function(e) {
                        let img = $('<img/>', {
                            src: e.target.result,
                            class: 'img-thumbnail mx-3',
                            width: 100,
                            height: 100,
                        });
                        $('#preview-photos').append(img);
                    };
                    reader.readAsDataURL(input.files[i]);
                }
            }
        }
    </script>
@endsection