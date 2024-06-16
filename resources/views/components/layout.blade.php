<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])

</head>
<body class=" bg-black text-white">

<div class="px-10">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">
        <div><a href="/">
                <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
            </a></div>
        <div class="space-x-6 font-bold">
            <a href="/jobs">Jobs</a>
            <a href="/contact">Contact Us</a>
        </div>

        <div class="space-x-2 text-sm">
            @auth

                <form class="inline" action="/logout" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>LogOut</button>
                </form>
                <a href="/@if(\Illuminate\Support\Facades\Auth::user()->admin)admin @else()user @endif
                    ">Dashboard</a>
            @endauth
            @guest
                <a href="/login">LogIn</a>
                <a href="/register">Register</a>

            @endguest
        </div>
    </nav>
    <main class="mt-10 max-w-[1080px] m-auto pb-10 ">
        {{$slot}}
    </main>
</div>

</body>
</html>
