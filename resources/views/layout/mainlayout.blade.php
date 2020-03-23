<!DOCTYPE html>
<html lang="en">
 <head>
 	@if(isset(Auth::user()->email))

	   @include('layout.partials.header')
	 </head>
	 <body>
		@include('layout.partials.nav')

		@include('layout.partials.header')
		@yield('content')

		@include('layout.partials.footer-script')

	 </body>
	 @else
    <script>window.location = "/main";</script>
	@endif
</html>
