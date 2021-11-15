<nav class="w-full bg-white shadow" role="navigation">
	<div class="max-w-7xl px-4 py-1 flex flex-wrap justify-between items-center mx-auto min-h-[4rem]">
		<a href="{{route('welcome')}}">
			<img class="h-20" src="{{ asset('img/logo.svg') }}" alt="Crystal Bars Navigation logo">
		</a>

		<button type="button" class="rounded border border-gray-300 shadow text-gray-700 h-10 w-10 flex justify-center
		md:hidden
		items-center bg-white hover:bg-gray-100">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
			</svg>
		</button>


		<div class="hidden md:flex flex-end items-center uppercase space-x-3 font-bold text-gray-500">
			<a class="rounded border border-gray-500 hover:bg-primary hover:text-white px-4 py-2" href="{{ route('welcome')
			}}">HOME</a>
			<a class="rounded border border-gray-500 hover:bg-primary hover:text-white px-4 py-2" href="#">ABOUT</a>
			<a class="rounded border border-gray-500 hover:bg-primary hover:text-white px-4 py-2" href="#">Gallery</a>
			<a class="rounded border border-gray-500 hover:bg-primary hover:text-white px-4 py-2" href="{{ route('contact')
			}}">Contact
				Us</a>
		</div>

	</div>
</nav>
