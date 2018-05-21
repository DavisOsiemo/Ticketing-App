<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> @yield('title') </title>
  <link rel="stylesheet" href="/css/bootstrap.css">
  <script src="/js/jquery-2.2.4.min.js"> </script>
  <script src="/js/bootstrap.min.js"> </script>
  </script>
  <script src="{!! asset('js/jquery-1.11.3.min.js') !!}">
  </script> <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>

@include ('shared.navbar')
@yield ('content')

</body>
</html>
