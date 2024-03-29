<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Frisk - @yield('title')</title>

        @section('style')
            <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
            <link href="{{ URL::asset('assets/css/bootstrap/3.3.6.min.css') }}" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="{{ URL::asset('assets/css/global/helpers.css') }}" rel="stylesheet">
            <link href="{{ URL::asset('assets/css/themes/default/global.css') }}" rel="stylesheet">
        @show

        @section('fonts')
            <!-- Custom Fonts -->
            <link href="{{ URL::asset('assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        @show
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body id="page-top app-layout">
        @yield('header')

        @section('container')
            <div class="container-fluid">
                @yield('content')
            </div>
        @show

        @section('footer')

        @show

        @yield('pre-scripts')

        @section('scripts')
            <!-- jQuery -->
            <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>

            <!-- Frisk Core JavaScript -->
            <script src="{{ URL::asset('assets/js/library/frisk.js') }}"></script>
        @show
    </body>

</html>
