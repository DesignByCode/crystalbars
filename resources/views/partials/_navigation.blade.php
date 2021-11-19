<nav x-data="{ open: false }" class="fixed z-50 top-8 left-0 right-0 w-full bg-white drop-shadow text-base"
	 role="navigation">
	<div class="max-w-7xl px-4 py-1 flex flex-wrap justify-between items-center mx-auto min-h-[3rem]">
		<a class="relative top-5 -mt-5" href="{{route('welcome')}}">
			<img class="h-20" src="{{ asset('img/logo.svg') }}" alt="Crystal Bars Navigation logo">
		</a>

		<button @click="open = ! open"  type="button" class="rounded border border-gray-300 shadow text-gray-700 h-10 w-10 flex justify-center
		md:hidden
		items-center bg-white hover:bg-gray-100">
			<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
			</svg>
		</button>


		<div :class="{'flex w-full  flex-col': open, 'hidden': ! open}" class="hidden md:flex flex-end md:flex-row
		items-center
		uppercase md:space-x-2 space-y-2 md:space-y-0 font-bold text-primary-500">
			<a class="rounded font-semibold border border-transparent hover:bg-primary hover:text-white px-4 py-2" href="{{
			route('welcome')
			}}">HOME</a>
			<a class="rounded font-semibold border border-transparent hover:bg-primary hover:text-white px-4 py-2"
			   href="{{route('gallery')}}">GALLERY</a>
			<a class="rounded  font-semibold border border-transparent hover:bg-primary hover:text-white px-4 py-2"
			   href="{{route('faq')}}">FAQ</a>

			<a class="relative font-semibold overflow-hidden rounded border border-primary-100 hover:bg-primary
			hover:text-white px-4
			py-2" href="{{ route
			('quote')
			}}">
				@if(!request()->is('quote'))
				<span class="absolute -top-3 left-5 flex h-20 w-20">
					<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary-400 opacity-85"></span>
					<span class="relative inline-flex rounded-full h-2 w-2 bg-primary-500"></span>
				</span>
				@endif
				FREE QUOTE
			</a>
		</div>

	</div>
</nav>
