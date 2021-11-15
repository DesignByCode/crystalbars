
<x-app-layout>

{{--   <section class="flex min-h-screen bg-primary">--}}

{{--	 </section>--}}

	<section class="w-full pt-32">
		<div class="max-w-7xl mx-auto px-4">
			<div class="grid grid-cols-12 gap-4">
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Secure &amp; Strong</h1>
					</header>
						<p>Tha transparent bars material is virtually unbreakable and withstand a tremendous amount of force.
							They are flexible and have a tensile breaking strength of 3000 kg.</p>
				</div>
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Zero Maintenance</h1>
					</header>
						<p> They are UV coated on both sides to prevent them from discolouring in the direct sun. You will have clear burglar bars that will never rust and will never require any maintenance.</p>
				</div>
				<div class="col-span-12 md:col-span-4 bg-white px-5 py-7 rounded shadow">
					<header class="mb-5">
						<h1 class="text-3xl font-bold tracking-tighter text-gray-700">Photos Gallery</h1>
					</header>
						<p>With hundreds of home fitted with our product we're done almost all kind of windows. View our photo gallery and see how the clear burglar bars will look on your style window.</p>
				</div>
			</div>

			<div class="grid grid-cols-12 my-20 gap-4">
				<div class="col-span-12 md:col-span-8 px-5 py-7 flex flex-wrap  items-center rounded bg-white shadow">
					<div class="space-y-5">

					<h1 class="text-5xl font-bold text-gray-700 tracking-tighter mb-5" >Transparent Burglar Bars</h1>
					<p>
						Crystal Bars : For our clear burglar bars we use A- grade polycarbonate that is imported from Europe. The
						transparent burglar bar is 6 mm in thickness and 35 mm in width. The bars are bevelled on both sides so
						that there are no sharp edges that could cut you when opening the windows. They are UV coated on both sides to prevent them from discolouring in the direct sun.
					</p>
					<p>
						The burglar bars are totally transparent so you will have an unobstructed view and have the most stylish clear burglar bars that will never rust and will never require any maintenance. Unfortunately with all security systems none of them are 100% intruder proof. Burglar bars are only a deterrent and should keep out your intruder until your security company or police arrive at your house.
					</p>
					</div>
				</div>
				<div class="col-span-6 md:col-span-4">
					<img src="{{ asset('img/stand.jpg') }}" alt="{{ config('app.name') }} stand" class="md:rotate-3 md:scale-110
					object-cover rounded
					shadow-xl">
				</div>
			</div>
			<div class="grid grid-cols-12 my-40 gap-4">
				<div class="col-span-4">
					<img src="{{ asset('img/van.jpg') }}" alt="{{ config('app.name') }} panel van" class="w-full rounded
					shadow-xl border border-gray-100">
				</div>
				<div class="col-span-4">
					<img src="{{ asset('img/bakkie.jpg') }}" alt="{{ config('app.name') }} bakkie" class="w-full rounded
					shadow-xl border border-gray-100">
				</div>
				<div class="col-span-4">
					<img src="{{ asset('img/trailer.jpg') }}" alt="{{ config('app.name') }} Trailer" class="w-full rounded
					shadow-xl border border-gray-100">
				</div>
			</div>

		</div>
	</section>



</x-app-layout>
