@php
    $check = '';
    if ($user->admin)
        $check = '1';
@endphp
<x-layout>
    <div class="text-right ">
        <a class="bg-blue-900 py-2 px-3 rounded-xl" href="/jobs/create">Post a Job</a>
    </div>
    <x-page-header>Admin Dashboard</x-page-header>
    <section>
        <x-sections-header>Edit User Information</x-sections-header>

        <x-forms.form method="POST" action="/user/{{$user->id}}">
            @method('PATCH')
            <x-forms.input label="Name :" name="name" :value="$user->name"/>
            <x-forms.input label="Email :" name="email" :value="$user->email"/>
            <x-forms.input label="Employer Name :"  name="employer" :value="$user->employer->name"/>
            <x-forms.checkbox  label="Admin check :" :val="$check" name="admin" value="1"/>
            <x-forms.button>Update</x-forms.button>
        </x-forms.form>
        <x-forms.divider/>
    </section>
    <section>

    </section>

</x-layout>
