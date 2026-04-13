<x-layout more-css="flex justify-center items-center" title="Project {{ $project->id }}">
    <div class="min-w-1/2 min-h-[18rem] card bg-secondary-content text-secondary-content-content w-96">
        <div class="card-body items-center text-center">
            <h2 class="text-secondary mb-5 text-3xl font-bold card-title">{{ $project->title }} - ({{ $project->status }})</h2>
            <p class="text-secondary text-lg">{{ $project->description }}</p>
            <div class="card-actions">
                <a href="/projects/{{ $project->id }}/edit" class="btn btn-success">Update</a>
                <a href="/projects/{{ $project->id }}/delete" class="btn btn-error">Delete</a>
            </div>
        </div>
    </div>
</x-layout>
