<x-guest-layout>

  <div class="bg-white p-6 max-w-2xl rounded-lg shadow-xl">
      <h1 class="text-6xl text-red-600 font-bold"><span class="text-blue-500">PRO</span>gresso</h1>
      <div class="p-3 mt-4 flex flex-col items-center">
         <h3>Your account has been created, please <a href="{{ route('login') }}" class="font-semibold text-primary text-center hover:text-red-600">Login</a></h3>
      </div>
  </div>
</x-guest-layout>