<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
@include('backend.common.head')
<body>
	@include('backend.common.loader')
	@include('backend.common.header')
	<section id="main">
		@include('backend.common.top-aside')
		@include('backend.common.left-aside')
		@yield('content')
		@include('backend.common.footer')
	</section>
	@include('backend.common.js')
</body>
</html>

