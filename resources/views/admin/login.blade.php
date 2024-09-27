<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="{{ asset('admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body, html {
            height: 100%;
            margin: 0;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="col-xl-8 col-lg-8 col-md-8">
            <div class="card o-hidden border-0 shadow-lg">
                <div class="card-body p-0">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6">
                            <div class="px-4 py-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Admin PhoGoDecor</h1>
                                </div>
                                <form class="user" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user" placeholder="Nhập Email..." value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                                        @error('password')
                                            <span class="text-danger">* {{ $message }}</span>
                                        @enderror
                                    </div>
                                    <hr>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Đăng Nhập</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.sweetaleart')
</body>
</html>

