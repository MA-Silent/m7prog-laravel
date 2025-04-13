<x-default-layout>
    <div class="mt-2 mx-2 py-3 font-bold bg-slate-500 rounded flex justify-center"><h1 class="text-orange-300 text-xl">Admin Index</h1></div>
    <div class="w-fit">
        @foreach ($projects as $project)
        <a href="{{ route('project.show',$project) }}">
            <div class="my-2 mx-2 border rounded-3xl px-2 h-fit w-fit text-red-500">
                {{ "$project->title" }}
            </div>
        </a>
        @endforeach
        {{ $projects->links() }}
    </div>
    <a class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right w-fit" href="{{ route('projectadmin.create') }}">{{__('New project')}}</a>
</x-default-layout>