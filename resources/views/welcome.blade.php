
<x-app-layout>

	<section class="flex min-h-screen items-center overflow-hidden relative bg-primary">

		<div class="absolute z-10 w-full min-h-full min-w-full flex flex-col justify-evenly pointer-events-none	">
			<div class="h-[6rem] drop-shadow-2xl w-full backdrop-blur-sm bars
			block"></div>
			<div class="h-[6rem] drop-shadow-2xl w-full backdrop-blur-sm bars
			block"></div>
			<div class="h-[6rem] drop-shadow-2xl w-full backdrop-blur-sm bars
			block"></div>
		</div>

		<video class="absolute w-auto min-w-full min-h-full max-w-none" muted autoplay loop>
			<source src="{{ asset('video/file.mp4') }}" type="video/mp4">
		</video>
		{{--		<div class="absolute bg-black opacity-0 inset-0"></div>--}}
		<div class="relative z-10 max-w-7xl w-full mx-auto dropshadow px-4 my-52 flex flex-wrap">
			<div class="w-full md:w-2/3 space-y-5">
				<h1 class="text-4xl md:text-7xl text-white text-opacity-90  leading-none font-black
				tracking-tighter
				text-gray-700">SECURE YOUR
					HOME AND
					BUSINESS
					WITH	THE
					BEST <span class="text-primary-300">TRANSPARENT</span> BURGLAR BARS
					OUT THERE
				</h1>
				<a href="{{ route('quote') }}" class="rounded inline-block text-lg tracking-tight font-semibold px-7
				py-3 text-white bg-primary hover:bg-primary-600 shadow-lg">GET FREE
					QUOTE</a>
			</div>
		</div>
	</section>

	<section class="w-full pt-32">
		<div class="max-w-7xl mx-auto px-4">

			<div class="grid grid-cols-12 my-20 gap-4">
				<div class="col-span-12 md:col-span-8 px-5 py-7 flex flex-wrap  items-center rounded bg-white
				shadow">
					<div class="space-y-5">

						<h1 class="text-5xl font-bold text-gray-700 tracking-tight mb-5" >Transparent Burglar Bars</h1>
						<p>
							For our clear burglar bars we use A-grade polycarbonate that is imported from Europe. The
							transparent burglar bar is 6 mm in thickness and 35 mm in width. The bars are bevelled on both sides so
							that there are no sharp edges that could cut you when opening the windows. They are UV coated on both sides to prevent them from discolouring in the direct sun.
						</p>
						<p>
							The burglar bars are totally transparent so you will have an unobstructed view and have the most stylish clear burglar bars that will never rust and will never require any maintenance. Unfortunately with all security systems none of them are 100% intruder proof. Burglar bars are only a deterrent and should keep out your intruder until your security company or police arrive at your house.
						</p>
					</div>
				</div>
				<div class="col-span-6 md:col-span-4">
					<img src="{{ asset('img/stand.jpg') }}" alt="{{ config('app.name') }} stand" class=" md:scale-110
					object-cover rounded relative z-10
					shadow-2xl">
				</div>
			</div>



			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-primary-500" fill="none"
						 viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
					</svg>
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Secure &amp; Strong</h1>
					</header>
					<p>Tha transparent bars material is virtually unbreakable and withstand a tremendous amount of force.
						They are flexible and have a tensile breaking strength of 3000 kg.</p>
				</div>
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
					</svg>
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Zero Maintenance</h1>
					</header>
					<p> They are UV coated on both sides to prevent them from discolouring in the direct sun. You will have clear burglar bars that will never rust and will never require any maintenance.</p>
				</div>
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-primary-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
					</svg>
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Photos Gallery</h1>
					</header>
					<p>With hundreds of home fitted with our product we're done almost all kind of windows. View our photo gallery and see how the clear burglar bars will look on your style window.</p>
					<a class="rounded px-5 py-2 bg-primary-500 hover:bg-primary-600 mt-5 inline-block text-white
					font-semibold
					tracking-tight text-lg"
					   href="{{route('gallery')}}"
					   rel="noreferrer">VIEW IMAGES</a>
				</div>
			</div>


			<div class="grid grid-cols-12 mt-40 gap-4 gallery">
				<div class="col-span-12 text-center">
					<h2 class="text-5xl font-bold text-gray-700 tracking-tight mb-10">
						Have a look at some work we have done.
					</h2>
				</div>
				<div class="col-span-4  md:scale-90">
					<a href="{{ asset('img/van.jpg') }}">

						<img src="{{ asset('img/van.jpg') }}" alt="{{ config('app.name') }} panel van" class="w-full
					rounded-md
					shadow-xl border-4 border-primary-500">
					</a>
				</div>
				<div class="col-span-4  md:scale-110">
					<a  href="{{ asset('img/bakkie.jpg') }}">
						<img src="{{ asset('img/bakkie.jpg') }}" alt="{{ config('app.name') }} bakkie" class="w-full
					rounded-md
					shadow-xl border-4 border-primary-500">
					</a>
				</div>
				<div class="col-span-4  md:scale-90">
					<a href="{{ asset('img/trailer.jpg') }}">
						<img src="{{ asset('img/trailer.jpg') }}" alt="{{ config('app.name') }} Trailer" class="w-full
					rounded-md
					shadow-xl border-4 border-primary-500">
					</a>
				</div>

			</div>
			<div class="flex justify-center mt-10 mb-40 text-center">
				<a class="rounded px-5 py-2 bg-primary-500 hover:bg-primary-600 mt-5 inline-block text-white
					font-semibold tracking-tight text-lg"
				   href="{{route('gallery')}}"  rel="noreferrer">VIEW GALLERY</a>
			</div>

		</div>
	</section>



</x-app-layout>
