
@include('layouts.head')

<body class="body-scrolled navbar-scrolled header-scrolled" crossrider_data_store_temp="{}" data-aos-easing="ease" data-aos-duration="1500" data-aos-delay="0">
	<div id="start">
	@include('layouts.partial.navbar')

	@yield('header')

    <main class="main-content">
    	@yield('main')
    	<cookie-component></cookie-component>
    	<register-component></register-component>
    	{{-- <popup-component></popup-component> --}}
	</main>

   
 	</div>
@include('layouts.tail')