
@include('layouts.head')

<body>
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