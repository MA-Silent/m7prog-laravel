<x-default-layout>
    <div class="mt-2 mx-2 py-3 font-bold bg-slate-500 rounded flex justify-center"><h1 class="text-orange-300 text-xl">Project creation</h1></div>
    <div class="flex flex-col justify-center items-center">
      @include('dashboard.form', ['route' =>route('admin.store'), 'method'=>'post', 'project' => new \App\Models\Project()])
    </div>
</x-default-layout>