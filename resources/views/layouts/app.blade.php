<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Transparent burglar bars in Cape Town')</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;900&display=swap" rel="stylesheet">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
	<link rel="stylesheet" href="{{ mix('css/plugins.css') }}">

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
<body class="font-sans antialiased text-gray-700 text-lg ">
	<!-- Global site tag (gtag) - Google Ads: 964038674 -->
	<amp-analytics type="gtag" data-credentials="include">
		<script type="application/json"> { "vars": { "gtag_id": "AW-964038674", "config": { "AW-964038674": { "groups": "default" } } }, "triggers": { } } </script>
	</amp-analytics>
	<div class="min-h-screen bg-gray-50">
	@include('partials._top-nav-banner')
	@include('partials._navigation')
	<!-- Page Content -->
		<main>
			{{ $slot }}
		</main>
		@include('partials._profile')

		@include('partials._footer')
	</div>

</body>
</html>
