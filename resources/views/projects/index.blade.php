<x-layout more-css="gap-x-6 gap-y-4 flex-wrap" title="Projects">
    @if(count($projects))
        @foreach($projects as $project)
            <div class=" min-h-[14rem] card bg-neutral text-neutral-content w-96">
                <div class="card-body items-center text-center">
                    <h2 class="text-2xl font-bold card-title">{{ $project->title }} - ({{ $project->status }})</h2>
                    <p>{{ $project->description }}</p>
                    <div class="card-actions">
                        <a href="/projects/{{ $project->id }}/edit" class="btn btn-success">Update</a>
                        <a href="/projects/{{ $project->id }}/delete" class="btn btn-error">Delete</a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div role="alert" class="w-1/2 min-h-1/4 alert alert-info">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="h-6 w-6 shrink-0 stroke-current">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>No projects found. Please Add some.</span>
            <a href="/projects/create" class="btn btn-primary">Add</a>
        </div>
    @endif
</x-layout>
