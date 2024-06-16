<x-layout>

    <div class="space-y-10">

        <x-page-header>All Jobs</x-page-header>
        <section>
            @if(count($jobs) != 0)
                <div class="space-y-6">
                    @foreach($jobs as $job)
                        <x-job-card-whid :$job/>
                    @endforeach

                </div>
            @else
                <x-panel class="text-center">It seems that nothing can be found...</x-panel>
            @endif
            <div class="mt-5">
                {{$jobs->links()}}
            </div>
        </section>
    </div>

</x-layout>
