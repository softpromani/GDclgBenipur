<!DOCTYPE html>
<html lang="en">
<head>
@include('user.include.head')
</head>
<body id="home">
<!-- Pre Loader -->
<div id="dvLoading"></div>

@include('user.include.header')

@yield('content')


@include('user.include.footer')

@include('user.include.foot')
@yield('script_area')
</body>
</html>

