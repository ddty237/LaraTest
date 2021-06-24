<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout produit') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <form action="/dashboard" method="POST">
                @include('includes.form')
                <button class="px-5 py-5 mt-2 flex items-center justify-center rounded-md bg-black text-white my-6" type="submit">Ajouter un produit</button>
              </form>
        </div>
    </div>




</x-app-layout>
