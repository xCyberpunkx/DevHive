<x-layout>
  <a href="/" class="inline-block text-gray-700 ml-4 mb-4 hover:text-gray-900 transition">
    <i class="fa-solid fa-arrow-left"></i> Back
  </a>
  <x-card class="p-10">
    <header>
      <h1 class="text-3xl text-center font-bold my-6 uppercase">
        Manage Gigs
      </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
      <tbody>
        @unless($listings->isEmpty())
        @foreach($listings as $listing)
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}"> {{$listing->title}} </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <a href="/listings/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl edit-listing">
              <i class="fa-solid fa-pen-to-square"></i>
              Edit
            </a>
          </td>
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <form method="POST" action="/listings/{{$listing->id}}" class="delete-listing-form">
              @csrf
              @method('DELETE')
              <button class="text-red-500 delete-listing">
                <i class="fa-solid fa-trash"></i> Delete
              </button>
            </form>
          </td>
        </tr>
        @endforeach
        @else
        <tr class="border-gray-300">
          <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
            <p class="text-center">No Listings Found</p>
          </td>
        </tr>
        @endunless

      </tbody>
    </table>
  </x-card>
</x-layout>

@push('scripts')
<script>
  // Add event listener to "Edit" buttons
  const editButtons = document.querySelectorAll('.edit-listing');
  editButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      window.location.href = this.getAttribute('href');
    });
  });

  // Add event listener to "Delete" buttons
  const deleteButtons = document.querySelectorAll('.delete-listing');
  deleteButtons.forEach(button => {
    button.addEventListener('click', function(event) {
      event.preventDefault();
      if (confirm('Are you sure you want to delete this listing?')) {
        const form = this.closest('.delete-listing-form');
        form.submit();
      }
    });
  });
</script>
@endpush
