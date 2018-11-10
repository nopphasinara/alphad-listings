<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin page</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/alphad.css') }}" rel="stylesheet">

</head>
<body class="layout">

<div class="admin">
    <div class="row no-gutters">

        <!-- =======================
        admin bar
        ========================= -->
        <div class="col-md-2">
            <div class="admin-nav">
                <a href="/"><h2 class="logo">{{ config('app.name', 'Alphad-Listings') }}</h2></a>
                <nav class="nav flex-column">
                    <a class="nav-link" href={{route('admin.index')}}>Statistics</a>
                    <a class="nav-link" href={{route('admin.users')}}>Users</a>
                    <a class="nav-link" href={{route('admin.companies')}}>Companies</a>
                    <a class="nav-link" href={{route('admin.listings')}}>Listings</a>
                    <a class="nav-link" href={{route('admin.categories.index')}}>Categories</a>

                    <p class="copyright">alphad</p>
                </nav>
            </div><!-- / .admin-bar  -->
        </div><!-- / .col-2  -->

        <!-- =======================
            admin content
        ========================= -->
        <div class="col-md-10">
            <div class="admin-content">

                <!-- navbar -->
                <nav class="navbar navbar-expand-sm navbar-light bg-white">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbaradmin" aria-controls="navbarSupportedcontent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbaradmin">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav  my-2 my-md-0">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Admin
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="content">
                    <div class="meta">
                        <h5 class="title">Administration</h5>
                        <small class="date">{{now()}}</small>

                        <!-- alert message -->
                        @if (Session::has('message'))
                            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                {{Session['message']}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <!-- =======================
                    page section
                    ========================= -->
                    @yield('content')


                </div><!-- / .content -->
            </div><!-- / admin-content -->
        </div><!-- / .col-10 -->

    </div><!-- / .row -->

</div><!-- / .admin -->
</body>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

@yield('script')

</html>
