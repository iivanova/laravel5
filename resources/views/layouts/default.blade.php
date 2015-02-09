<!DOCTYPE html>
<html class="bootstrap-admin-vertical-centered">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	{{ HTML::style('media/css/bootstrap.min.css'); }}
	{{ HTML::style('media/css/bootstrap-theme.min.css'); }}
	{{ HTML::style('media/css/bootstrap-admin-theme.css'); }}
	{{ HTML::style('media/css/bootstrap-admin-theme-change-size.css'); }}
	
<title>Welcome</title>
</head>
<body class="bootstrap-admin-without-padding">
	<div class='container'>
		@yield('content')
	</div>
	<div>
		<hr>
	</div>
</body>
</html>
