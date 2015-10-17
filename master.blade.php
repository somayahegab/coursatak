<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Furbook</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')
}}">
</head>
<body>
<div class="container">
<div class="page-header">
<div class="text-right">
@if (Auth::check())
Logged in as
<strong>{{ Auth::user()->email }}</strong>
{{!!url('logout')!!}}

@else
{{!!url('login')!!}}
@endif
</div>
@yield('header')
</div>
@if (Session::has('success'))
<div class="alert alert-success">
{{ Session::get('success') }}
</div>
@endif
@if (Session::has('error'))
<div class="alert alert-warning">
{{ Session::get('error') }}
</div>
@endif
@yield('content')
</div>
</body>
</html>
