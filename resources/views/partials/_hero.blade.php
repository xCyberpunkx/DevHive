
<!-- Hero -->
<div class="relative overflow-hidden">
  <!-- Gradients -->
  <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
    <div class="bg-gradient-to-r from-yellow-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-yellow-900/50 dark:to-purple-900"></div>
    <div class="bg-gradient-to-tl from-yellow-50 via-yellow-100 to-yellow-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-yellow-900/70"></div>
  </div>
  <!-- End Gradients -->

  <div class="relative z-10">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
      <div class="max-w-2xl text-center mx-auto">

        <!-- Title -->
        <div class="mt-5 max-w-4xl">
          <h1 class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
            Creative Solutions for Developers and Employers
          </h1>
        </div>
        <!-- End Title -->

        <div class="mt-5 max-w-3xl">
          <p class="text-lg text-gray-600 dark:text-neutral-400">Turn Ideas into Reality with Expert Programmers</p>
        </div>

        <!-- Buttons -->
        
        <div class="mt-8 gap-3 flex justify-center">
          @auth
        @else
          <a class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-laravel text-white hover:bg-laravel disabled:opacity-50 disabled:pointer-events-none"  href="/register">
            Sign Up to List a Gig
            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
          @endauth
        </div>
        <!-- End Buttons -->
      </div>
    </div>
  </div>
</div>
<!-- End Hero -->
