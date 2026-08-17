<x-layout>
  <div class="flex items-center justify-between">
    <h1>Create New Idea</h1>
  </div>

  <form method="POST" action="/ideas" class="mt-6">
    @csrf
    <div class="col-span-full">
      <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
      <div class="mt-2">
        <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/ideas" class="text-sm/6 font-semibold text-white">Cancel</a>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>

 <x-form.errors />


</x-layout>
