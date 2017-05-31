<!doctype html>
<html>
<head>
    @include('elements.head')
</head>
<body class="mini-navbar">

    <div id="wrapper">  

        @include('elements.navbar')

        <div id="page-wrapper" class="gray-bg">

        @include('elements.header')

            <div class="wrapper wrapper-content">
             @yield('content')
            </div>

        @include('elements.footer')

        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ URL::asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ URL::asset('js/inspinia.js') }}"></script>

</body>
</html>