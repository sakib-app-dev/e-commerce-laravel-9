<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
<title>Colored  an Admin Panel Category Flat Bootstrap Responsive Website Template | Signup :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ asset('/public/ui/admin/css/') }}/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{ asset('/public/ui/admin/css/') }}/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{ asset('/public/ui/admin/css/') }}/font.css" type="text/css"/>
<link href="{{ asset('/public/ui/admin/css/') }}/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
		
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h2>Sign Up</h2>
				</div>
				
				<form method="POST" action="{{ route('register') }}">
					@csrf
		
					<!-- Name -->
					<div>
						{{-- <x-input-label for="name" :value="__('Name')" /> --}}
		
						<x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required placeholder="Enter Your Name..." autofocus />
		
						<x-input-error :messages="$errors->get('name')" class="mt-2" />
					</div>
		
					<!-- Email Address -->
					<div class="mt-4">
						{{-- <x-input-label for="email" :value="__('Email')" /> --}}
		
						<x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="Enter Your Email..." />
		
						<x-input-error :messages="$errors->get('email')" class="mt-2" />
					</div>
		
					<!-- Password -->
					<div class="mt-4">
						{{-- <x-input-label for="password" :value="__('Password')" /> --}}
		
						<x-text-input id="password" class="block mt-1 w-full"
										type="password"
										name="password"
										placeholder="Password..."
										required autocomplete="new-password" />
		
						<x-input-error :messages="$errors->get('password')" class="mt-2" />
					</div>
		
					<!-- Confirm Password -->
					<div class="mt-4">
						{{-- <x-input-label for="password_confirmation" :value="__('Confirm Password')" /> --}}
		
						<x-text-input id="password_confirmation" class="block mt-1 w-full"
										type="password"
										placeholder="Confirm password..."
										name="password_confirmation" required />
		
						<x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
					</div>
		
					<div class="flex items-center justify-end mt-4">
						<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
							{{ __('Already registered?') }}
						</a>
		
						<x-primary-button class="ml-4 register">
							{{ __('Register') }}
						</x-primary-button>
					</div>
				</form>
				<a href="index.html">Back To Home</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2016 Colored . All Rights Reserved . Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
			<!-- //footer -->
			
		</div>
	<script src="{{ asset('/public/ui/admin/js/') }}/proton.js"></script>
</body>
</html>
