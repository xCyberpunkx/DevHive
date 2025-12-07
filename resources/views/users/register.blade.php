<x-layout>
  <a href="/" class="inline-block text-gray-700 ml-4 mb-4 hover:text-gray-900 transition">
    <i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <x-card class="p-10 max-w-sm mx-auto">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1 text-laravel hover:text-laravel">Register</h2>
      <p class="mb-4">Create an account to post gigs</p>
    </header>

    <form method="POST" action="/users">
      @csrf
      <div class="mb-6" >
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name </label>
        <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-laravel focus:border-laravel block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-laravel dark:focus:border-laravel" icon="o-user" name="name" value="{{old('name')}}" />
        
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
        <input type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-laravel focus:border-laravel block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-laravel dark:focus:border-laravel" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          Password
        </label>
        <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-laravel focus:border-laravel block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-laravel dark:focus:border-laravel" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
          Confirm Password
        </label>
        <input type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-laravel focus:border-laravel block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-laravel dark:focus:border-laravel" name="password_confirmation"
          value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-white border border-laravel hover:text-laravel">
          Sign Up
        </button>
      </div>

      <div class="mt-8">
        <p>
          Already have an account?
          <a href="/login" class="text-laravel">Login</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>