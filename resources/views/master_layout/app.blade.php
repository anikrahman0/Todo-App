<html>
<head>
        <title> @yield('title')</title>

</head>
<body style="background-color:#455D62;">
@include('master_layout.header')


@yield('content1')



@yield('content2')



@yield('content3')



@yield('content4')

@yield('content5')


@include('master_layout.footer')
</body>
</html>