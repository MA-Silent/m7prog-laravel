<x-default-layout>
    <div>   
        @foreach ($projects as $project)
        <a href="{{ route('project.show',$project) }}">
            <div class="my-2 mx-2 border rounded-3xl px-2 h-fit w-fit text-red-500">
                {{ "$project->title" }}
            </div>
        </a>
        @endforeach
        {{ $projects->links() }}
    </div>
</x-default-layout>