<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	{{-- Header --}}
	@include('includes.header')

	{{-- Content --}}
	@yield('content')

	{{-- Footer --}}
	@include('includes.footer')

	{{-- Script common --}}

	{{-- Jquery --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	{{-- Popper --}}
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	{{-- Boostrap JS --}}
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	@yield('script-libraries')
</body>
</html>