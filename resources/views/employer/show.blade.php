<x-layout>

    <x-page-header>{{$employer->name}}</x-page-header>
    <section>
        <x-sections-header>Employer Jobs</x-sections-header>
        <ul class="ml-5 space-y-2">
           @foreach($employer->jobs as $job)
                <li><span class="pr-2">□</span> <a href="/jobs/{{$job->id}}" class="hover:pl-2 hover:text-blue-300 transition-all duration-200">{{$job->name}}</a></li>
            @endforeach
        </ul>
    </section>
</x-layout>
