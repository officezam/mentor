<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    <title>Home - CommunAbility</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/javascript.js') }}" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="{{ asset('css/style.css') }}" rel= "stylesheet">
</head>

    @yield('pagecss')
    <!-- Custom Theme Style -->

<body>


        <!-- top navigation -->
        @include('layouts.header')
        <!-- /top navigation -->


        <!-- top navigation -->
{{--        @include('layouts.slider')--}}
        <!-- /top navigation -->

        <!-- page content -->
        @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        @include('layouts.footer')
        <!-- /footer content -->


        <div class="clr"></div>
        <div class= "circle"><a href="#">i</a></div>
        @yield('pagejs')

</body>
</html>
