@extends('admin.layout.app')
@section('title')
    Người Dùng
@endsection
@section('content')
<div class="container px-5">
    <h1 class="h3 mb-3 text-center">Quản Lý Người Dùng</h1>
    <table class="table table-bordered table-hover">
        <thead class="table-info text-center">
            <tr>
                <th></th>
                <th>Name</th>
                <th>Email</th>
                <th>Giới Tính</th>
                <th>Phone</th>
                <th>Address</th>
                <th colspan="2">Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row )
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $row->name }}</td>
                    <td class="align-middle">{{ $row->email }}</td>
                    <td class="align-middle">{{ $row->gender == 1 ? 'Nam' : 'Nữ' }}</td>
                    <td class="align-middle">{{ $row->phone_number }}</td>
                    <td class="align-middle">{{ $row->address }}</td>
                    <td class="text-center"><a href="" class="text-success"><i class="fa-regular fa-eye"></i></a></td>
                    <td class="text-center"><a href="" class="text-danger"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td class="align-middle" colspan="8">
                    {{ $users->links() }}
                </td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection