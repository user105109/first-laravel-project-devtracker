<x-layout more-css="flex justify-center items-center" title="New Project">
    <form method="post" action="/projects">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box h-96 w-md border p-6">
            <legend class="fieldset-legend text-lg">Project details</legend>

            <label for="title" class="label">Title</label>
            <input id="title" name="title" type="text" class="input" placeholder="TODO list" />

            <label for="description" class="label">Description</label>
            <input id="description" name="description" type="text" class="input" placeholder="In this project...." />

            <label for="status" class="label">Status</label>
            <select name="status" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Status</option>
                <option value="ongoing">Ongoing</option>
                <option value="done">Done</option>
                <option value="planned">Planned</option>
            </select>
{{--            <x-error name="project"></x-error>--}}
{{--            <x-error name="description"></x-error>--}}
{{--            <x-error name="status"></x-error>--}}
            <p class="mt-2 italic text-xs text-gray-400">Status can only be: planned, ongoing or done</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="rounded-md hover:bg-orange-800 bg-orange-600 px-4 py-3 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-900">
                    Save
                </button>
            </div>
        </fieldset>
    </form>
</x-layout>
