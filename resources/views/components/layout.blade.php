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
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    .transition-transform {
      transition: transform 0.3s ease-in-out;
    }
    .bg-custom-blue { background-color: #201658; }
    .bg-custom-sea { background-color: #98ABEE; }
    .bg-custom-beige { background-color: #F9E8C9; }
  </style>
  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#7AA2E3',
            },
          },
        },
      }
  </script>
  <title> DevHive |  Where Developers Thrive</title>
</head>

<body class="mb-48">
  <!----
  
  <nav class=" flex  justify-between items-center mb-4">
    <a href="/"><img class="w-24 " src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
        <span class=" font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
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
  ----->
  <nav class=" flex  justify-between items-center mb-4">
    <a href="/"><img class="w-24 " src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
        <span class=" font-bold uppercase">
          Welcome {{auth()->user()->name}}
        </span>
      </li>
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
  
  <footer
    class="bg-laravel  fixed bottom-0 left-0 w-full flex items-center justify-start font-bold  text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-white text-laravel hover:bg-laravel hover:text-white py-2 px-5">Post Job</a>
  </footer>

  <x-flash-message />
</body>

</html>