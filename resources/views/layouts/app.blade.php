<!DOCTYPE html>
<html>
<head>
 @include('elements.head')
</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        @yield('content')
    </div>

    <!-- scripts -->
    <script src="{{ URL::asset('js/jquery-2.1.1.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

</body>
</html>
