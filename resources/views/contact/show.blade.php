<x-layout>
    <a href="/" class="inline-block text-gray-700 ml-4 mb-4 hover:text-gray-900 transition">
        <i class="fa-solid fa-arrow-left"></i> Back
      </a>
    <div class="relative bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30">
        <div class="absolute inset-0 bg-laravel transform-gpu -rotate-12 blur-3xl"></div>
    </div>
    <div class="flex flex-col justify-center items-center min-h-screen py-12 sm:py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl w-full mx-auto">
            <div class="bg-white shadow-lg rounded-lg p-8">
                <h2 class="text-3xl font-bold text-gray-900 mb-4 text-center">Contact Us</h2>
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
                    <p class="font-bold">Success</p>
                    <p>{{ session('success') }}</p>
                </div>
                @endif
                @if($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
                    <p class="font-bold">Errors</p>
                    <ul class="mt-2 list-disc list-inside text-sm text-red-500">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('contact.send') }}" method="POST" class="grid grid-cols-1 gap-y-6 sm:grid-cols-2">
                    @csrf
                    <div>
                        <label for="first-name" class="block text-sm font-semibold text-gray-900">First Name</label>
                        <input type="text" name="first_name" id="first-name" autocomplete="given-name"
                            class="mt-1 block w-80 px-3.5 py-2 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50">
                        @error('first_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold text-gray-900">Last Name</label>
                        <input type="text" name="last_name" id="last-name" autocomplete="family-name"
                            class="mt-1 block w-full px-3.5 py-2 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50">
                        @error('last_name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold text-gray-900">Company</label>
                        <input type="text" name="company" id="company" autocomplete="organization"
                            class="mt-1 block w-full px-3.5 py-2 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50">
                        @error('company')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold text-gray-900">Email</label>
                        <input type="email" name="email" id="email" autocomplete="email"
                            class="mt-1 block w-full px-3.5 py-2 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50">
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm font-semibold text-gray-900">Phone Number</label>
                        <div class="relative mt-1">
                            <input type="text" name="phone_number" id="phone-number" autocomplete="tel"
                                class="block w-full px-3.5 py-2 pl-12 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50"
                                placeholder="+1234567890">
                            @error('phone_number')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold text-gray-900">Message</label>
                        <textarea name="message" id="message" rows="4"
                            class="mt-1 block w-full px-3.5 py-2 rounded-md border border-gray-300 shadow-sm focus:border-laravel focus:ring focus:ring-laravel-dark focus:ring-opacity-50"></textarea>
                        @error('message')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2 flex items-center">
                        <input type="checkbox" id="agree" name="agree" class="rounded border border-gray-300 text-laravel focus:ring-0 focus:ring-laravel focus:ring-opacity-50">
                        <label for="agree" class="ml-2 block text-sm text-gray-900">I agree to the <a href="#" class="text-laravel-dark">privacy policy</a>.</label>
                        @error('agree')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <button type="submit"
                            class="w-full py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-semibold text-white bg-laravel hover:bg-laravel-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-laravel-dark focus:ring-opacity-50">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
