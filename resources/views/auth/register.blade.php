<x-layout>
    <x-page-header>Register </x-page-header>
    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input name="name" label="Your Name"/>
        <x-forms.input name="email" label="Your Email Address" type="email"/>
        <x-forms.input name="password" label="Your Password" type="password"/>
        <x-forms.input name="password_confirmation" label="Password Confirm" type="password"/>

        <x-forms.divider/>

        <x-forms.input name="employer" label="Your Employer Name"/>
        <x-forms.input name="logo" label="Your Employer Logo" type="file"/>

        <x-forms.button>Create Account</x-forms.button>

    </x-forms.form>
</x-layout>
