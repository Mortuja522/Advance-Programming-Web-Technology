<html>
    <head>
    </head>


<body>
        <a href="{{ route('/') }}">Home</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('login') }}">Login</a>

    <p>Student View</p>

    @yield('content')

</body>

</html>