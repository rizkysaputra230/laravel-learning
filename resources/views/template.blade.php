<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Siswaku</title>
    <link href="{{ asset ('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset ('css/style.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        @include('navbar')
        @yield('main')
    </div>    
        @yield('footer')

<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/alert.js') }}"></script>
<script src="{{ asset('js/siswakuapp.js') }}"></script>
</body>
</html>