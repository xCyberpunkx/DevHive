<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/logo.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
  <title> DevHive | Where Developers Thrive</title>
  @stack('scripts')
</head>
<body class="mb-48">
  
  <nav class="flex justify-between items-center mb-4 px-4 mx-10">
    <a href="/" class="font-semibold text-gray-800 text-4xl dark:text-neutral-200"><span class="text-laravel">Dev</span>Hive</a>
    <ul class="flex space-x-6 text-sm">
      @auth
      <li>
        <span class="font-bold uppercase">
          Welcome {{ auth()->user()->name }}
        </span>
      </li>
      @if(auth()->user()->hasRole('admin'))
      <li>
        <a href="/admin" class="hover:text-laravel"><i class="fa-solid fa-tachometer-alt"></i> Dashboard</a>
      </li>
      @endif
      <li>
        <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Manage Listings</a>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Logout
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
      </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{$slot}}
  </main>
  
  <!-- Privacy Policy Modal -->
  <div id="privacyModal" class="fixed inset-0 z-50 flex justify-center items-center bg-gray-900 bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-96">
      <h2 class="text-lg font-semibold mb-4">Privacy Policy</h2>
      <p class="text-sm text-gray-700 mb-4">
        At DevHive, we value the privacy of our users. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website DevHive or use our services.
      </p>
      <p class="text-sm text-gray-700 mb-4">
        Please read this Privacy Policy carefully. If you do not agree with the terms of this Privacy Policy, please do not access the site or use our services.
      </p>
      <p class="text-sm text-gray-700 mb-4">
        We may update this Privacy Policy from time to time. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.
      </p>
      <button onclick="document.getElementById('privacyModal').classList.add('hidden')" class="px-4 py-2 bg-laravel text-white rounded-md hover:bg-white hover:text-laravel border hover:border-laravel">Close</button>
    </div>
  </div>

  <footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#" class="hover:underline">DevHive™</a>. All Rights Reserved.</span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
      <li>
        <a href="/listings/create" class="hover:underline me-4 md:me-6 text-laravel">Post job</a>
      </li>
      <li>
        <a href="#" onclick="document.getElementById('privacyModal').classList.remove('hidden')" class="hover:underline me-4 md:me-6">Privacy Policy</a>
      </li>
      <li>
        <a href="/contact" class="hover:underline">Contact</a>
      </li>
    </ul>
  </footer>

  <x-flash-message />
  
</body>
</html>
