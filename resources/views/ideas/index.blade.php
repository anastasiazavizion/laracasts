<x-layout>
  <div class="flex items-center justify-between">
    <h1>Your Ideas</h1>
    <a href="/ideas/create" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500">New Idea</a>
  </div>

  @if($ideas->count())
    <div class="grid gap-2 grid-cols-2 mt-2">
      @foreach($ideas as $idea)
        <div class="card bg-neutral text-neutral-content">
          <div class="card-body items-center text-center">
            {{ $idea->description }}
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p class="mt-6 text-gray-400">No ideas yet. <a href="/ideas/create" class="text-indigo-600 hover:text-indigo-500">Create one</a></p>
  @endif
</x-layout>

