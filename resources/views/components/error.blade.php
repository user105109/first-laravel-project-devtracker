@props(['name'])

@error($name)
<div class="flex p-4 my-7 text-sm text-white rounded-base bg-red-600 border border-red-400" role="alert">
    <svg class="w-4 h-4 me-2 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
    <span class="sr-only">Danger</span>
    <div>
        <span class="font-medium">Ensure that these requirements are met:</span>
        <ul class="mt-2 list-disc list-outside space-y-1 ps-2.5">
            {{--                                <li>At least 10 characters (and up to 100 characters)</li>--}}
            {{--                                <li>At least one lowercase character</li>--}}
            {{--                                <li>Inclusion of at least one special character, e.g., ! @ # ?</li>--}}
            {{--                                <li>Both areas are required</li>--}}
            <li>{{ $message }}</li>
        </ul>
    </div>
</div>
@enderror

