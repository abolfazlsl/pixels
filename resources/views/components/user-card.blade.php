@props(['user'])

<x-panel class=" flex flex-col text-center">

    <a href="/user/{{$user->id}}">
        <div>
            <strong class="text-blue-600 text-sm">Employer Name</strong>
            <p class="border-b border-white/10">{{$user->employer->name}}</p>
        </div>
        <div>
            <strong class="text-blue-600 text-sm">Name</strong>
            <p class="border-b border-white/10">{{$user->name}}</p>
        </div>
        <div>
            <strong class="text-blue-600 text-sm">Email</strong>
            <p>{{$user->email}}</p>
        </div>
    </a>
</x-panel>
