<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('style/app.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap5/css/bootstrap.css')}}">
</head>
<body style="background-color: #1F1D1E;">
    <x-navbar/>
    @foreach($errors->all() as $error)
            <ul class="alert alert-danger">
                <li id="error">{{$error}}</li>
            </ul>
         @endforeach
    <div class="container">
        @yield('content')
    </div>
    <script src="{{asset('bootstrap5/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/js/app.js')}}"></script>
</body>
</html>