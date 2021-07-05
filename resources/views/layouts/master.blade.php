<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lake Resort || Responsive BootStrap HTML 5 Template</title>
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('layouts.head-script')
</head>

<body >
    
	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

{{--<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>--}}
   
    <!-- /Loader -->
    @include('layouts.main_head')
<!--------------------------->
    @yield('content')
<!--------------------------->
    @include('layouts.main_footer')

    @include('layouts.footer-scripts')
</body>

</html>