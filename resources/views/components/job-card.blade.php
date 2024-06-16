@props(['job'])

<x-panel class=" flex flex-col text-center">

    <a href="/employers/{{$job->employer->id}}" class="self-start text-xs text-gray-400 group-hover:text-white transition-colors duration-200">{{$job->employer->name}}</a>

    <div class="py-8">
        <a href="jobs/{{$job->id}}" class="group-hover:text-blue-800 transition-colors duration-200 text-xl font-bold">{{$job->name}}</a>
        <p class="text-xs pt-10">{{$job->time}} - {{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>

            @foreach($job->tags as $tag)
                <x-tag size="small" :$tag/>
            @endforeach



        </div>
        <a href="/employers/{{$job->employer->id}}" ><x-job-logo with="42" :employer="$job->employer"/></a>
    </div>

</x-panel>
