<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
	</head>
<body>

	@if(Session::has('global'))
		<p>{{ Session::get('global') }}</p>
	@endif

@include('layouts.nav')
@yield('content')
</body>

</html>