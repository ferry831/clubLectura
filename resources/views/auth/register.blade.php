<x-layout>
    <x-page-heading>Registro</x-page-heading>

    <x-forms.form method="POST" action="/register" enctype="multipart/form-data">
        <x-forms.input label="Nombre completo" name="name" />
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Contraseña" name="password" type="password" />
        <x-forms.input label="Confirmación de Contraseña" name="password_confirmation" type="password" />

        <x-forms.divider />



        <x-forms.button>Registra tu cuenta</x-forms.button>


    </x-forms.form>
</x-layout>
