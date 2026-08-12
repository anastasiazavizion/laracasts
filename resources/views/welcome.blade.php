<x-layout>

    {{ $name }}
    <h1>Welcome Page</h1>

    <div>
        @if (count($tasks))
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@else
    <p>No tasks available.</p>
@endif
    </div>

</x-layout>

