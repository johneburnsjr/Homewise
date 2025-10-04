<x-app-layout>
<div class="text-center mt-10">
    <h2 class="text-2xl font-bold text-indigo-700 mb-2">
        Maintenance for {{ $city }}, {{ $state }}
    </h2>
    <ul class="list-disc text-left mx-auto w-fit text-gray-700 space-y-1">
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
</div>
</x-app-layout>
