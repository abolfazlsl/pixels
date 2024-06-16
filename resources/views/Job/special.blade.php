<x-layout>

    <div class="space-y-10">

        <x-page-header>All Special Jobs</x-page-header>
        <section>
            @if(count($SpecialsJob) != 0)
                <div class="space-y-6">
                    @foreach($SpecialsJob as $job)
                        <x-job-card-whid :$job/>
                    @endforeach

                </div>
            @else
                <x-panel class="text-center">It seems that nothing can be found...</x-panel>
            @endif
            <div class="mt-5">
                {{$SpecialsJob->links()}}
            </div>
        </section>
    </div>

</x-layout>
