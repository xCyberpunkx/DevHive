<x-layout>
  <a href="/" class="inline-block text-gray-700 ml-4 mb-4 hover:text-gray-900 transition">
    <i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
    <x-card class="p-10 shadow-lg rounded-lg">
      <div class="flex flex-col items-center justify-center text-center space-y-6">
        <img class="w-48 h-48 object-cover rounded-full shadow-md"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/logo.png')}}" alt="logo" />

        <h3 class="text-3xl font-semibold text-gray-800">
          {{$listing->title}}
        </h3>
        <div class="text-2xl font-bold text-gray-600">
          {{$listing->company}}
        </div>

        <x-listing-tags :tagsCsv="$listing->tags" class="mt-4"/>

        <div class="text-lg text-gray-500 my-4 flex items-center">
          <i class="fa-solid fa-location-dot mr-2 "></i> {{$listing->location}}
        </div>
        <div class="border-t border-gray-200 w-full mb-6"></div>
        <div class="w-full">
          <h3 class="text-3xl font-bold text-gray-800 mb-4">Job Description</h3>
          <div class="text-lg text-gray-600 space-y-6">
            <p>{{$listing->description}}</p>

            <a href="mailto:{{$listing->email}}"
              class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80 transition flex items-center justify-center">
              <i class="fa-solid fa-envelope mr-2"></i> Contact Employer
            </a>

            <a href="{{$listing->website}}" target="_blank"
              class="block bg-gray-800 text-white py-2 rounded-xl hover:opacity-80 transition flex items-center justify-center">
              <i class="fa-solid fa-globe mr-2"></i> Visit Website
            </a>
          </div>
        </div>
      </div>
    </x-card>
  </div>
</x-layout>
