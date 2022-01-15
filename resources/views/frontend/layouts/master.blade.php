<!DOCTYPE html>
<html lang="en">
<head>
	@include('frontend.layouts.head')

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
     @include('frontend.layouts.header')

	<!-- home page slider -->
	 @include('frontend.layouts.slider')
	<!-- end home page slider -->

	<!-- latest news -->
	@yield('main_content')
	<!-- end latest news -->



	@include('frontend.layouts.footer')
	 
    @include('frontend.layouts.scripts') 

</body>
</html>