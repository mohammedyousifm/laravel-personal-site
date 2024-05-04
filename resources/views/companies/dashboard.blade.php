<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة القيادة')</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css.map') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    {{-- mystyle --}}
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                {{-- <a href="" class="logo hide-in-small">
                    لوحة القيادة
                </a> --}}
                <div class="text-center hide-in-small">
                    <img src="{{ asset('dashboard/images/moh2.png') }}" width="70px" alt="" srcset="">
                </div>
                <button class="toggle mt-2 btn btn-primary" type="button" style="display: none;">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <style>
                    @media screen and (max-width: 1000px) {
                        .toggle {
                            display: block !important;
                        }

                    }

                    .logo-header img,
                    .photos img {
                        border-radius: 50%;
                    }
                </style>
            </div>
            <nav class="navbar navbar-header text-center mt-1 navbar-expand-lg">
                <div class="container-fluid">


                    <div class="text-center photos hide-in-ssmall">
                        <img src="{{ asset('dashboard/images/moh2.png') }}" width="40px" alt="Profile Image">
                        <div class="dropdown-menu" style="display: none;">
                            <a href="/profile">View Profile</a>
                            <a href="/logout">Logout</a>
                        </div>
                    </div>


                </div>


            </nav>

        </div>

        <div class="nav-sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <ul class="nav mt-3">
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <p>لوحة القيادة</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{ route('projects.index') }}">
                            <i class="fa fa-code"></i>
                            <p>المشاريع</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-paperclip"></i>
                            <p>خدمات</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-laptop"></i>
                            <p>المهارات</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-plus"></i>
                            <p>المدونات</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="">
                            <i class="fa fa-comment"></i>
                            <p>ردود الفعل</p>
                            <span class="badge badge-count"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        @yield('content')


        <!-- bootstrap -->
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.js.map') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js.map') }}"></script>

        {{-- sweet alert 2  --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- my script --}}
        <script src="{{ asset('dashboard/js/script.js') }}"></script>
</body>

</html>
