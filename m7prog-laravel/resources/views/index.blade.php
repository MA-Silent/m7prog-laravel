<x-default-layout>
    <div>
        @foreach ($projects as $project)
        <div class="border rounded-3xl px-2 h-fit text-IDK">
            {{ "$project->title: $project->description" }}
        </div>
        @endforeach
    </div>
</x-default-layout>