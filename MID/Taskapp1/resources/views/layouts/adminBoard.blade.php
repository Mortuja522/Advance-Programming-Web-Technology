<html>
    <head>
    </head>


<body>
        <a href="{{ route('/') }}">Home</a>
        <a href="{{ route('contact') }}">Contact Us</a>
        <a href="{{ route('login') }}">Login</a>

    <p>Admin View</p>

    @yield('content')

</body>

</html>