<x-default-layout>
    <div class="mt-2 mx-2 py-3 font-bold bg-slate-500 rounded flex justify-center"><h1 class="text-orange-300 text-xl">Project creation</h1></div>
    <div class="flex flex-col justify-center items-center">
        <div class="w-[80%] rounded flex-shrink">
            <form action="{{route('projectadmin.store')}}" method="POST">
                @csrf
                <div class="space-y-12">
                  <div class="border-b border-neutral-300/10 pb-12">
    
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                      <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                        <div class="mt-2">
                          <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-neutral-500 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6"></div>
                            <input type="text" name="title" id="title" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-black placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="janesmith">
                          </div>
                        </div>
                      </div>
              
                      <div class="col-span-full">
                        <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                        <div class="mt-2">
                          <textarea name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-black outline-1 -outline-offset-1 outline-neutral-500 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                        </div>
                      </div>
              
                      <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm/6 font-medium text-white">Image</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-neutral-300/25 px-6 py-10">
                          <div class="text-center">
                            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm/6 text-neutral-300">
                              <label for="image" class="relative cursor-pointer rounded-md bg-white px-1 font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="image" name="image" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs/5 text-neutral-300">PNG, JPG, GIF up to 10MB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
    
                <div class="mt-6 flex items-center justify-end gap-x-6">
                  <a class="cursor-pointer" href="{{URL::previous()}}"><button type="button" class="text-sm/6 font-semibold text-white cursor-pointer">Cancel</button></a>  
                  <button type="submit" class="cursor-pointer rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
              </form>
        </div>
    </div>
</x-default-layout>