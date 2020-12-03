<x-guest-layout>
	<x-slot name="banner">{{asset('img/banner.svg')}}</x-slot>

	<div class="bg-white p-6 max-w-2xl rounded-lg shadow-xl">
		<h1 class="text-6xl text-red-600 font-bold"><span class="text-blue-500">PRO</span>gresso</h1>
		<div class="p-3 mt-4 flex flex-col items-center">
			<form method="POST" action="{{ route('password.update') }}">
				@csrf

				<!-- Password Reset Token -->
				<input type="hidden" name="token" value="{{ $request->route('token') }}">

				<div>
					<label for="email" class="text-lg font-semibold text-gray-700">Email</label>
					<input 
						type="email" 
						name="email" 
						id="email" 
						class="mt-1 px-4 py-2 rounded-lg w-full ring-1 focus:outline-none focus:ring-2 " required>
					@error('email') <p class="text-sm text-red-500">{{ $message }} </p> @enderror
				</div>

				<div class="mt-4">
					<label for="password" class="text-lg font-semibold text-gray-700">Password</label>
					<input 
						type="password" 
						name="password" 
						id="password" 
						class="mt-1 px-4 py-2 rounded-lg w-full border focus:outline-none focus:ring-2 " required>
					@error('password') <p class="text-sm text-red-500">{{ $message }} </p> @enderror
				</div>
  
				<div class="mt-4">
					<label for="password_confirmation" class="text-lg font-semibold text-gray-700">Confirm Password</label>
					<input 
						type="password" 
						name="password_confirmation" 
						id="password_confirmation" 
						class="mt-1 px-4 py-2 rounded-lg w-full border focus:outline-none focus:ring-2 " required>
				</div>

				<div class="mt-10">
					<button 
						type="submit" 
						class="block w-full rounded-lg text-center py-2 bg-primary text-white font-bold focus:outline-none focus:ring-2 focus:ring-red-600 hover:bg-red-600">
						Sign In
					</button>
				</div>
			</form>
		</div>
	</div>
</x-guest-layout>