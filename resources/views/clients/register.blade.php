<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    <link href="{{ asset('admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row d-flex justify-content-center align-items-center" style="height:100vh;">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng Ký</h1>
                                    </div>
                                    <form class="user" action="" method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="name" value="{{ old('name') }}" placeholder="Nhập tên của bạn...">
                                            @error('name')
                                                <span class="text-danger" style="font-size: small">* {{ $message }}</span>
                                            @enderror
                                            
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" value="{{ old('email') }}" placeholder="Nhập email...">
                                            @error('email')
                                                <span class="text-danger" style="font-size: small">* {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" value="{{ old('password') }}" placeholder="Mật khẩu">
                                            @error('password')
                                                <span class="text-danger" style="font-size: small">* {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Đăng Ký
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('clients.login') }}">Bạn đã có tài khoản? Đăng nhập ngay!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    @if (Session::has('ok'))
        <script>
            Swal.fire({
                title: "Thành Công",
                text: "{{ session('ok') }}",
                icon: "success"
            });
        </script>
    @elseif (Session::has('no'))
        <script>
            Swal.fire({
                title: "Thất Bại",
                text: "{{ session('no') }}",
                icon: "error",
            });
        </script>
    @endif
</body>
</html>