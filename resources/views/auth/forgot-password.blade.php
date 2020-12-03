<x-guest-layout>
  <div class="bg-white p-6 max-w-2xl rounded-lg shadow-xl">
    <h1 class="text-6xl text-red-600 font-bold"><span class="text-blue-500">PRO</span>gresso</h1>
    <div class="p-3 mt-4 flex flex-col">
	   <h3 class="font-bold text-xl">Forgot password?</h3>
	   <p>Fill the form and we will email you a link that allows you choose a new password</p>

	   <form action="{{ route('password.email') }}" method="POST">
		   @csrf
		   <div class="mt-5">
				<label for="email" class="text-lg font-semibold text-gray-700">Email</label>
				<input 
					type="email" 
					name="email" 
					id="email" 
					class="mt-1 px-4 py-2 rounded-lg w-full ring-1 focus:outline-none focus:ring-2"
					required>
					@error('email') <p class="text-sm text-red-500">{{ $message }} </p> @enderror
			</div>

			<div>
				<div class="mt-5">
					<button 
						type="submit" 
						class="block w-full rounded-lg text-center py-2 bg-primary text-white font-bold focus:outline-none focus:ring-2 focus:ring-red-600 hover:bg-red-600">
						Send password reset link
					</button>
				</div>
			</div>
	   </form>
    </div>
  </div>
</x-guest-layout>