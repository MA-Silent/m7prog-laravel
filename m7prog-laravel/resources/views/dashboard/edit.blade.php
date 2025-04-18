<x-default-layout>
    <div class="mt-2 mx-2 py-3 font-bold bg-slate-500 rounded flex justify-center"><h1 class="text-red-500 text-xl">Editing project: {{$project->title}}</h1></div>
    <div class="flex flex-col justify-center items-center">
      @include('dashboard.form', ['route' =>route('admin.update', ['admin'=>$project]), 'method'=>'put'])
    </div>
</x-default-layout>