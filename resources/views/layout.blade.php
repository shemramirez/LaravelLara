<!--This is the layout-->
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet"/>
<!--Redict to the public folder for link-->
<link href="css/fonts.css" rel="stylesheet"/>

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="#">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>			
				<!--This function request for a path if path is equal the path directed  output currentpageitem or nothing-->
				<!-- Double { means a wildcard-->
				<li class ="{{ Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class ="{{ Request::path() === 'post/Heelo' ? 'current_page_item' : ''}}"><a href="/posts/Heelo" accesskey="2" title="">Our Clients</a></li>
				<li class ="{{ Request::path() === 'about' ? 'current_page_item' : ''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class ="{{ Request::path() === '#' ? 'current_page_item' : ''}}"><a href="#" accesskey="4" title="">Careers</a></li>
				<!--The same with request isfunction compare the item then ouput currentpageitem or nothing-->
				<li class ="{{ Request::is('contact') ? 'current_page_item' : ''}}"><a href="/contact" accesskey="5" title="">Contact Us</a></li>
				
			</ul>
        </div>
        
	</div>
	<!-- This means yield or redirect to a section-->
	@yield('header')
	@yield('content')
</body>
</html>
