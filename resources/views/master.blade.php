<!doctype html>
<html lang="en">
<head>
@include('includes.meta')
@include('includes.css')
@include('includes.favicon')
<title>@yield('title') - Crud</title>
</head>
<body>
@yield('header')
@yield('main')
@include('includes.script')
</body>
</html>
