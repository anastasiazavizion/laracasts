<x-layout>
  <div class="flex items-center justify-between">
    <h1>Your Ideas</h1>
    <a href="/ideas/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500">New Idea</a>
  </div>

@if($ideas->count())
  <ul class="mt-6">
    @foreach($ideas as $idea)
      <li>{{ $idea->description }}</li>
    @endforeach
  </ul>
@else
  <p class="mt-6 text-gray-400">No ideas yet. <a href="/ideas/create" class="text-indigo-600 hover:text-indigo-500">Create one</a></p>
@endif

</x-layout>

