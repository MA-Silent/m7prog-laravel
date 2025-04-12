<x-default-layout>
    <div>
        @foreach ($projects as $project)
        <a href="{{ route('project.show',$project) }}">
            <div class="my-2 mx-2 border rounded-3xl px-2 h-fit text-IDK">
                {{ "$project->title: $project->description" }}
            </div>
        </a>
        @endforeach
    </div>
</x-default-layout>