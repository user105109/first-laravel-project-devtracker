<x-layout more-css="flex justify-center items-center" title="Update Project {{$project->id}}">
    <form method="post" action="/projects/{{ $project->id }}">
        @csrf
        @method('PATCH')

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box h-96 w-md border p-6">
            <legend class="fieldset-legend">Update Project details</legend>

            <label for="title" class="label">New Title</label>
            <input id="title" name="title" type="text" class="input" value="{{ $project->title }}""/>

            <label for="description" class="label">New Description</label>
            <input id="description" name="description" type="text" class="input" value="{{ $project->description }}" />

            <label for="status" class="label">New Status</label>
            <select name="status" class="select select-bordered w-full max-w-xs">
                <option disabled selected>Status</option>
                <option value="ongoing">Ongoing</option>
                <option value="done">Done</option>
                <option value="planned">Planned</option>
            </select>
            <p class="mt-2 italic text-xs text-gray-400">Status can only be: planned, ongoing or done</p>
            <div class="mt-6 flex items-center gap-x-6">
                <button type="submit" class="rounded-md hover:bg-indigo-700 bg-indigo-500 px-4 py-3 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                    Update
                </button>
            </div>
{{--            <x-error name="project"></x-error>--}}
{{--            <x-error name="description"></x-error>--}}
{{--            <x-error name="status"></x-error>--}}
{{--        </fieldset>--}}
    </form>
</x-layout>
