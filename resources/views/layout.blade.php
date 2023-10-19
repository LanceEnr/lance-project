<!DOCTYPE html>
<html>

<head>
    <title>Laravel Website</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/services">Services</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/faq">FAQs</a></li>
        </ul>
    </nav>

    @yield('content')
</body>

</html>