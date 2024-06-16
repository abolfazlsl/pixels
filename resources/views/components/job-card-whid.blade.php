@props(['job'])
<x-panel class="flex flex-row gap-x-6">
    <div>
        <a href="/employers/{{$job->employer->id}}"> <x-job-logo :employer="$job->employer"/> </a>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="/employers/{{$job->employer->id}}" class="block text-sm text-gray-400 group-hover:text-white transition-colors duration-200">{{$job->employer->name}}</a>
        <a href="/jobs/{{$job->id}}" class="font-bold text-lg pl-2 group-hover:text-blue-800 transition-colors duration-200">{{$job->name}}</a>
        <p class="text-gray-400 text-xs mt-auto ">{{$job->time}} - {{$job->salary}}</p>
    </div>

    <div class="space-x-1">
        @foreach($job->tags as $tag)
            <x-tag :$tag/>
        @endforeach

    </div>
</x-panel>
