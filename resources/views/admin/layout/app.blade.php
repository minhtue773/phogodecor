<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('admin') }}/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('admin.layout.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow px-3">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-bell fa-lg text-primary"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger rounded-pill"
                                    style="position: absolute; top: 14px; left: 16px;">3</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Chào,
                                    {{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('admin/img/undraw_profile_2.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <button type="button" class="dropdown-item btn btn-primary" style="font-size: 13.6px"
                                    data-bs-toggle="modal" data-bs-target="#profileModal">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng Xuất
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                @yield('content')
                <!-- Content -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PhogoDecor 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
    </div>
    <!--End Page Wrapper -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    {{-- Modal --}}
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <section style="background-color: #eee;">
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card mb-4">
                                        <div class="card-body text-center">
                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                                alt="avatar" class="rounded-circle img-fluid"
                                                style="width: 150px;">
                                            <h5 class="my-3">{{ Auth::user()->name }}</h5>
                                            {{-- <p class="text-muted mb-1">Admin</p> --}}
                                            <p class="text-muted mb-2">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <form action="{{ route('admin.updateProfile', Auth::user()) }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="row d-flex justify-items-center">
                                                    <label class="col-3 col-form-label">Name</label>
                                                    <div class="col-9 d-flex align-items-center">
                                                        <i class="fa-regular fa-pen-to-square text-success me-3"></i>
                                                        <input type="text" name="name"
                                                            class="form-control-plaintext"
                                                            value="{{ Auth::user()->name }}">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row d-flex justify-items-center">
                                                    <label class="col-3 col-form-label">Giới Tính</label>
                                                    <div class="col-9 d-flex align-items-center">
                                                        <i class="fa-regular fa-pen-to-square text-success me-3"></i>
                                                        <select name="gender" class="form-control-plaintext">
                                                            <option value="0">-- Chọn giới tính --</option>
                                                            <option value="1"
                                                                {{ Auth::user()->gender == 1 ? 'selected' : '' }}>Nam
                                                            </option>
                                                            <option value="2">
                                                                {{ Auth::user()->gender == 2 ? 'selected' : '' }}Nữ
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row d-flex justify-items-center">
                                                    <label class="col-3 col-form-label">Phone</label>
                                                    <div class="col-9 d-flex align-items-center">
                                                        <i class="fa-regular fa-pen-to-square text-success me-3"></i>
                                                        <input type="text" name="phone_number"
                                                            class="form-control-plaintext"
                                                            value="{{ Auth::user()->phone_number }}">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row d-flex justify-items-center">
                                                    <label class="col-3 col-form-label">Address</label>
                                                    <div class="col-9 d-flex align-items-center">
                                                        <i class="fa-regular fa-pen-to-square text-success me-3"></i>
                                                        <input type="text" name="address"
                                                            class="form-control-plaintext"
                                                            value="{{ Auth::user()->address }}">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary">Lưu thay
                                                            đổi</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <div class="card mb-4">
                                        <div class="card-body p-0">
                                            <ul class="list-group list-group-flush rounded-3">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="fas fa-globe fa-lg text-warning"></i>
                                                    <p class="mb-0">phogodecor</p>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="fab fa-github fa-lg text-body"></i>
                                                    <p class="mb-0">phogodecor</p>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                                    <p class="mb-0">phogodecor</p>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center p-3">
                                                    <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                                    <p class="mb-0">phogodecor</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div class="card mb-4 mb-md-0">
                                        <div class="card-body">
                                            <p class="mb-4"><span
                                                    class="text-primary font-italic me-1">assigment</span>
                                                Project Status
                                            </p>
                                            <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 80%"
                                                    aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 72%"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 89%"
                                                    aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template
                                            </p>
                                            <div class="progress rounded" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 55%"
                                                    aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                            <div class="progress rounded mb-2" style="height: 5px;">
                                                <div class="progress-bar" role="progressbar" style="width: 66%"
                                                    aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
    <script type="importmap">
		{
			"imports": {
				"ckeditor5": "https://cdn.ckeditor.com/ckeditor5/43.1.0/ckeditor5.js",
				"ckeditor5/": "https://cdn.ckeditor.com/ckeditor5/43.1.0/"
			}
		}
		</script>
    <script type="module">
        import {
            ClassicEditor,
            AccessibilityHelp,
            Autoformat,
            AutoImage,
            Autosave,
            BlockQuote,
            Bold,
            CloudServices,
            Essentials,
            Heading,
            ImageBlock,
            ImageCaption,
            ImageInline,
            ImageInsert,
            ImageInsertViaUrl,
            ImageResize,
            ImageStyle,
            ImageTextAlternative,
            ImageToolbar,
            ImageUpload,
            Indent,
            IndentBlock,
            Italic,
            Link,
            LinkImage,
            Paragraph,
            SelectAll,
            SimpleUploadAdapter,
            Table,
            TableCaption,
            TableCellProperties,
            TableColumnResize,
            TableProperties,
            TableToolbar,
            TextTransformation,
            Underline,
            Undo
        } from 'ckeditor5';

        const editorConfig = {
            toolbar: {
                items: [
                    'undo',
                    'redo',
                    '|',
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'underline',
                    '|',
                    'link',
                    'insertImage',
                    'insertTable',
                    'blockQuote',
                    '|',
                    'outdent',
                    'indent'
                ],
                shouldNotGroupWhenFull: false
            },
            plugins: [
                AccessibilityHelp,
                Autoformat,
                AutoImage,
                Autosave,
                BlockQuote,
                Bold,
                CloudServices,
                Essentials,
                Heading,
                ImageBlock,
                ImageCaption,
                ImageInline,
                ImageInsert,
                ImageInsertViaUrl,
                ImageResize,
                ImageStyle,
                ImageTextAlternative,
                ImageToolbar,
                ImageUpload,
                Indent,
                IndentBlock,
                Italic,
                Link,
                LinkImage,
                Paragraph,
                SelectAll,
                SimpleUploadAdapter,
                Table,
                TableCaption,
                TableCellProperties,
                TableColumnResize,
                TableProperties,
                TableToolbar,
                TextTransformation,
                Underline,
                Undo
            ],
            heading: {
                options: [{
                        model: 'paragraph',
                        title: 'Paragraph',
                        class: 'ck-heading_paragraph'
                    },
                    {
                        model: 'heading1',
                        view: 'h1',
                        title: 'Heading 1',
                        class: 'ck-heading_heading1'
                    },
                    {
                        model: 'heading2',
                        view: 'h2',
                        title: 'Heading 2',
                        class: 'ck-heading_heading2'
                    },
                    {
                        model: 'heading3',
                        view: 'h3',
                        title: 'Heading 3',
                        class: 'ck-heading_heading3'
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            image: {
                toolbar: [
                    'toggleImageCaption',
                    'imageTextAlternative',
                    '|',
                    'imageStyle:inline',
                    'imageStyle:wrapText',
                    'imageStyle:breakText',
                    '|',
                    'resizeImage'
                ]
            },
            link: {
                addTargetToExternalLinks: true,
                defaultProtocol: 'https://',
                decorators: {
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            placeholder: 'Nhập nội dung!',
            table: {
                contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells', 'tableProperties', 'tableCellProperties']
            }
        };

        ClassicEditor.create(document.querySelector('#editor'), editorConfig);
    </script>
    <script src="{{ asset('admin') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="{{ asset('admin') }}/js/sb-admin-2.min.js"></script>
    <script src="{{ asset('admin') }}/vendor/chart.js/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @include('admin.layout.sweetaleart')
    @yield('js')
</body>
</html>
