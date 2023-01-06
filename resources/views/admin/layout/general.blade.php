<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
        <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
        <title>Dashboard - Admin</title>
        <!-- CSS files -->
        <link href="{{asset('assets/dist/css/tabler.css')}}" rel="stylesheet"/>
        <link href="{{asset('assets/dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    </head>
    <body >
        <div class="page">
            @include('sweetalert::alert')

            @include('admin.layout.sidebar')
            @include('admin.layout.header')
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="container-xl">
                      <div class="row row-deck row-cards">
                        <div class="col-md-12 mb-3">
                            <h1>@yield('title')</h1>
                        </div>
                        @yield('content')
                      </div>
                    </div>
                </div>
                @include('admin.layout.footer')
            </div>
        </div>

        <script src="{{asset('assets/dist/js/tabler.min.js')}}" defer></script>
    </body>
</html>
