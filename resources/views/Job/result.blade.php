<x-layout>

    <x-search-section/>
    <section>
        <x-sections-header>Results</x-sections-header>
        <div class="space-y-6">
            @foreach($jobs as $job)
                <x-job-card-whid :$job/>
            @endforeach

              @if(count($jobs) == 0 )
                <x-panel class="text-center text-lg" >Your search - <strong>{{request('q')}}</strong> - did not match any Jobs.</x-panel>
              @endif

        </div>
    </section>

</x-layout>
