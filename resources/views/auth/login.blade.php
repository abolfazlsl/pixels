<x-layout>
    <x-page-header>LogIn</x-page-header>
    <x-forms.form method="POST" action="/login">

        <x-forms.input name="email" label="Your Email Address" type="email"/>
        <x-forms.input name="password" label="Your Password" type="password"/>

        <x-forms.button>LogIn</x-forms.button>

    </x-forms.form>
</x-layout>
