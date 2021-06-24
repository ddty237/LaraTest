<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editer le produit') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-xl leading-10">Editer le produit {{$produit->name}} </h1>
            <form action="/produit/{{$produit->id}}" method="POST">
                @method('PATCH')
                @include('includes.form')
                <button class="px-5 py-5 mt-2 flex items-center justify-center rounded-md bg-black text-white my-6" type="submit">Editer le produit</button>
            </form>
        </div>
    </div>




</x-app-layout>
