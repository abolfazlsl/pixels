<x-layout>

    <x-page-header>{{$job->employer->name}}</x-page-header>

    <section>
        <x-sections-header>Job Detail</x-sections-header>
        <x-panel>
            <div class="p-4 border-b border-white/10">
                <p class="font-bold text-lg mb-1 text-blue-600">Name</p>
                <span class="pl-3  ">{{$job->name}}</span>
            </div>
            <div class="p-4 border-b border-white/10">
                <p class="font-bold text-lg mb-1 text-blue-600">Salary</p>
                <span class="pl-3  ">This job pay {{$job->salary}} in year.</span>
            </div>
            <div class="p-4 border-b border-white/10">
                <p class="font-bold text-lg mb-1 text-blue-600">Location</p>
                <span class="pl-3  ">{{$job->location}}</span>
            </div>
            <div class="p-4 border-b border-white/10">
                <p class="font-bold text-lg mb-1 text-blue-600">Work Time</p>
                <span class="pl-3  ">{{$job->time}}</span>
            </div>
            <div class="pt-2 text-center">
                <p class="group-hover:text-blue-600 mb-1"><a href="{{$job->url}}" target="_blank">Click to send your resume</a></p>
            </div>
        </x-panel>
    </section>
</x-layout>
