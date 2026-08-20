<x-layout>
  <div class="flex items-center justify-between">
    <h1>Your Ideas</h1>
  </div>

  @if($ideas->count())
    <div class="grid gap-2 grid-cols-2 mt-2">
      @foreach($ideas as $idea)
        <div class="card bg-neutral text-neutral-content">
          <div class="card-body items-center text-center">
            <a href="/ideas/{{ $idea->id }}" class="card-title">{{ $idea->description }}</a>
          </div>
        </div>
      @endforeach
    </div>
  @else
    <p class="mt-6 text-gray-400">No ideas yet. @auth <a href="/ideas/create" class="text-indigo-600 hover:text-indigo-500">Create one</a></p>@endauth
  @endif
</x-layout>

