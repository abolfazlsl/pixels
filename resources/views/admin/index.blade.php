<x-layout>
    <div class="text-right ">
        <a class="bg-blue-900 py-2 px-3 rounded-xl" href="/jobs/create">Post a Job</a>
    </div>
    <x-page-header>Admin Dashboard</x-page-header>
    <section>
        <x-sections-header>Edit Information</x-sections-header>

        <x-forms.form method="POST" action="/admin">
            @method('PATCH')
            <x-forms.input label="Name :" name="name" :value=" \Illuminate\Support\Facades\Auth::user()->name"/>
            <x-forms.input label="Email :" name="email" :value=" \Illuminate\Support\Facades\Auth::user()->email"/>
            <x-forms.button>Update</x-forms.button>
        </x-forms.form>
        <x-forms.divider/>
    </section>
    <section>

    </section>
    <section>
        <x-sections-header>User Listing</x-sections-header>
        <div class="grid grid-cols-3 gap-4 mt-6">
            @foreach($users as $user)
                <x-user-card :user="$user"/>
            @endforeach
        </div>
        <div class="mt-5">{{$users->links()}}</div>
    </section>
</x-layout>
