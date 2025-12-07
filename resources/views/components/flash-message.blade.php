{{--
@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
  <p>
    {{session('message')}}
  </p>
</div>
@endif
--}}
@if(session()->has('message'))
<div id="notification" class="fixed top-0 left-1/2 transform -translate-x-1/2 bg-laravel text-white px-48 py-3">
  <p>
    {{ session('message') }}
  </p>
</div>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    const notification = document.getElementById('notification');
    setTimeout(() => {
      notification.style.display = 'none';
    }, 3000);
  });
</script>
@endif