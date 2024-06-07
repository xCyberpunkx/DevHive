

@props(['listing'])
<x-card>
  <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
    <div class="h-52 flex flex-col justify-center items-center bg-laravel rounded-t-xl">
      <img class="hidden w-48 mr-6 md:block"
        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/logo.png')}}" alt="" />
    </div>
    <div class="p-4 md:p-6">
      <span class="block mb-1 text-xs font-semibold uppercase text-laravel dark:text-blue-500">
        {{$listing->company}}
      </span>
      <h3 class="text-xl font-semibold text-gray-800 dark:text-neutral-300 dark:hover:text-white">
        <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <x-listing-tags :tagsCsv="$listing->tags" />
      <div class="text-lg mt-4">
        <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
      </div>
    </div>
    <div class=" flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
      
      <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 hover:text-laravel shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" href="/listings/{{$listing->id}}">
        Visit Gig
      </a>
    </div>
  </div>
</x-card>

