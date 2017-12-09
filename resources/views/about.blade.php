<html>
<head>
	<title>About Me</title>
	<meta charset="utf-8">
    <title>Laravel 5.5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>
<body>
		<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand" href="#">Project name</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="{{ url('/about') }}">About Us</a></li>
	            <li><a href="{{ url('/products') }}">Check Products</a></li>
	            <li> <a href="{{ url('/products/create') }}">Add Products</a></li>                   
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

	    <div class="container content">
	    	<div class="text-center">
	    		<h3>About Us </h3>
	    	</div>
	    </div>
</body>
</html>