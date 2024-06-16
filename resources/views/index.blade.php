<x-layout>

    <div class="space-y-10">
        <x-search-section/>
        <section>
            <x-sections-header>Special Jobs
                <x-link-job :jobs="$jobs" :count="6" href="/jobs/specials">Click to see all special jobs..</x-link-job>
            </x-sections-header>

            @if(count($SpecialsJob) != 0)
                <div class="grid grid-cols-3 gap-8 mt-6">

                    @foreach($SpecialsJob as $job)
                        <x-job-card :$job/>
                    @endforeach
                </div>
            @else
                <x-panel class="text-center">No special work has been added yet</x-panel>
            @endif


        </section>

        <section>
            <x-sections-header>Tags</x-sections-header>
            @if(count($jobs) != 0)
                <div class="space-x-1 ">
                    @foreach($tags as $tag)
                        <x-tag :$tag/>
                    @endforeach
                </div>
            @else
                <x-panel class="text-center">OPS ! Where is the Tags?</x-panel>
            @endif
        </section>

        <section>
            <x-sections-header>Lasted Jobs
                <x-link-job :jobs="$jobs" :count="10" href="/jobs">Click to see all jobs..</x-link-job>
            </x-sections-header>
            @if(count($jobs) != 0)
                <div class="space-y-6">
                    @foreach($jobs as $job)
                        <x-job-card-whid :$job/>
                    @endforeach

                </div>
            @else
                <x-panel class="text-center">It seems that nothing can be found...</x-panel>
            @endif

        </section>
    </div>

</x-layout>
