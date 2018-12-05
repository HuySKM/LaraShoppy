<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@include('frontend.partials.header')
@section('sidebar')
    This is the master sidebar.
@show

<div class="container">
    @yield('content')
</div>

@include('frontend.partials.footer')


</body>
</html>