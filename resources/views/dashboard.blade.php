<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            BIENVENIDO {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <!-- Contenido main de la ruta /dasboard -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-welcome />
        </div>
    </div>
</x-app-layout>
