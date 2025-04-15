<x-default-layout>
    <div>
        <div class="mt-2 mx-2 py-3 font-bold bg-slate-500 rounded flex justify-center"><h1 class="text-orange-300 text-xl">Projects</h1></div>
        @foreach ($projects as $project)
        <a href="{{ route('project.show',$project->id) }}">
            <div class="my-2 mx-2 border rounded-3xl px-2 h-fit text-IDK">
                {{ "$project->title: $project->description" }}
            </div>
        </a>
        @endforeach
    </div>
</x-default-layout>