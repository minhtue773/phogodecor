@extends('admin.layout.app')
@section('title')
    Danh mục
@endsection
@section('content')
<div class="container px-5">
    <h1 class="h3 mb-3 text-center">Quản Lý Danh Mục</h1>
    <a href="{{ route('category.create') }}" class="btn btn-primary mb-3"><i class="fa-solid fa-plus me-2"></i>Thêm danh mục mới</a>
    <table class="table table-bordered table-hover">
        <thead class="table-info text-center">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Trạng Thái</th>
                <th>Ngày Tạo</th>
                <th>Ngày Cập Nhật</th>
                <th colspan="2">Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $row)
                <tr>
                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $row->name }}</td>
                    <td class="align-middle">{{ $row->status == 0 ? 'Hiển Thị' : 'Ẩn' }}</td>
                    <td class="align-middle text-center">{{ $row->created_at->format('d-m-Y') }}</td>
                    <td class="align-middle text-center">{{ $row->updated_at->format('d-m-Y') }}</td>
                    <td class="text-center"><a href="{{ route('category.edit', $row) }}" class="text-success"><i class="fa-regular fa-edit"></i></a></td>
                    <td class="text-center">
                        <form action="{{ route('category.destroy',$row) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Nếu bạn xóa thì tất cả sản phẩm thuộc {{ $row->name }} đều bị xóa!!')" type="submit" class="text-danger" style="border: none; background:none;"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection