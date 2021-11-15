<x-app-layout>
	<div class="my-20 max-w-7xl mx-auto px-4">
		<div class="flex flex-col text-center w-full my-12">
			<h1 class="sm:text-3xl text-2xl md:text-5xl font-bold title-font mb-4 text-gray-700">GET YOUR <span
					class="font-black text-primary underline italic">FREE</span> QUOTE</h1>
		</div>

		@if(session('status'))
			<div class="lg:w-1/2 md:w-2/3 mx-auto bg-green-200 p-5 rounded shadow mb-5 font-bold text-green-500">
				{{session('status')}}
			</div>
		@endif
		@if(session('errors'))
			<div class="lg:w-1/2 md:w-2/3 mx-auto bg-red-200 p-5 rounded shadow mb-5 font-bold text-red-500">
				Oops! something went wrong.
			</div>
		@endif


		<div class="lg:w-1/2 md:w-2/3 mx-auto">
			<div class="flex flex-wrap -m-2">
				<form class="flex flex-wrap" method="POST" action="{{ route('quote.send') }}">
					@csrf
					@method('POST')
					<div class="p-2 w-1/2">
						<div class="relative">
							<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
							<input type="text" id="name" name="name" value="{{old('name')}}" class="w-full bg-gray-100 bg-opacity-50
							rounded
							border
						border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base
						outline-none
						text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out
@error('name') border-red-500   @enderror
								">
							@error('name')
							<span class="text-red-500 block py-1">
								{{$message}}
							</span>
							@enderror

						</div>
					</div>

					<div class="p-2 w-1/2">
						<div class="relative">
							<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
							<input type="email" id="email" name="email"
										 value="{{old('email')}}"
										 class="w-full bg-gray-100 bg-opacity-50 rounded border
						border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base
						outline-none
						text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out
@error('email') border-red-500   @enderror
								">
							@error('email')
							<span class="text-red-500 block py-1">
								{{$message}}
							</span>
							@enderror
						</div>
					</div>

					<div class="p-2 w-full">
						<div class="relative">
							<label for="phone" class="leading-7 text-sm text-gray-600">Phone</label>
							<input type="tel" id="phone" name="phone"
										 value="{{old('phone')}}"
										 class="w-full bg-gray-100 bg-opacity-50 rounded border
						border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 text-base
						outline-none
						text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out
@error('phone') border-red-500   @enderror
								">
							@error('phone')
							<span class="text-red-500 block py-1">
								{{$message}}
							</span>
							@enderror
						</div>
					</div>

					<div class="p-2 w-full">
						<div class="relative">
							<label for="message" class="leading-7 text-sm text-gray-600">Message</label>
							<textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border
						border-gray-300 focus:border-primary-500 focus:bg-white focus:ring-2 focus:ring-primary-200 h-32 text-base
						outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out
@error('name') border-red-500   @enderror
								">{{old('message')}}</textarea>
							@error('message')
							<span class="text-red-500 block py-1">
								{{$message}}
							</span>
							@enderror
						</div>
					</div>

					<div class="p-2 w-full">
						<button type="submit" class="flex mx-auto text-white bg-primary-500 border-0 py-2 px-8 focus:outline-none
					hover:bg-primary-600
					rounded text-lg">SUBMIT</button>
					</div>
				</form>

				<div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
					<a href="mailto:info@crystalbars.co.za" class="text-primary-500">info@crystalbars.co.za</a>
				</div>
			</div>
		</div>
	</div>

</x-app-layout>
