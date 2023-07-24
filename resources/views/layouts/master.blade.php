<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name','Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--Style-->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <script src="https://cdnjs.cloundlare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>

@include('layouts.inc.admin-navbar')

<div id="layoutSidenav">

    @include('layouts.inc.admin-sidebar')

    <div id="layoutSidenav_content">
        <main>

        @yield('content')

</main>
@include('layouts.inc.admin-footer')
</div>

</div>

<script src="{{ asset('assets//js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/scripts.js') }}"></script>
<script src="js/scripts.js"></script>


</body>
</html>