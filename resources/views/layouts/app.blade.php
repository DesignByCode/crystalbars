<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Transparent burglar bars in Cape Town')</title>

	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75033958-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-75033958-1');
	</script>

	<!-- Scripts -->
	<script src="{{ mix('js/app.js') }}" defer></script>
</head>
	<body class="font-sans antialiased text-gray-500 ">
		<!-- Global site tag (gtag) - Google Ads: 964038674 -->
		<amp-analytics type="gtag" data-credentials="include">
			<script type="application/json"> { "vars": { "gtag_id": "AW-964038674", "config": { "AW-964038674": { "groups": "default" } } }, "triggers": { } } </script>
		</amp-analytics>
		<div class="min-h-screen bg-gray-50">
		@include('partials.navigation')
		<!-- Page Content -->
			<main>
				{{ $slot }}
			</main>
			@include('partials.footer')
		</div>

	</body>
</html>
