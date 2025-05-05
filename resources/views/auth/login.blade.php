<x-layout>
    <x-page-heading>Inicia Sesión</x-page-heading>

    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Contraseña" name="password" type="password" />

        <x-forms.divider />



        <x-forms.button>Iniciar sesión</x-forms.button>


    </x-forms.form>
</x-layout>
