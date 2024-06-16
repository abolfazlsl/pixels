<x-layout>
    <div class="flex justify-between">
        <span class="border border-white/10"><x-job-logo :employer="\Illuminate\Support\Facades\Auth::user()->employer" with="40" /></span>
        <a class=" bg-blue-900 py-2 px-3 rounded-xl" href="/jobs/create">Post a Job</a>
    </div>
    <x-page-header>User Dashboard</x-page-header>
    <section>
        <x-sections-header>Edit Information</x-sections-header>

        <x-forms.form method="POST" action="/user">
            <x-forms.input label="Name :" name="name" :value=" \Illuminate\Support\Facades\Auth::user()->name"/>
            <x-forms.input label="Email :" name="email" :value=" \Illuminate\Support\Facades\Auth::user()->email"/>
            <x-forms.input label="Employer Name :" name="employer" :value=" \Illuminate\Support\Facades\Auth::user()->employer->name"/>
            <x-forms.button>Update</x-forms.button>
        </x-forms.form>
        <x-forms.divider/>
    </section>
</x-layout>
