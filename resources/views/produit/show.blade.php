<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout produit') }}
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">

            <div class="ml-5 flex justify-center flex-row w-52 h-52">
                <img src="{{$produit->url_img}}" alt="image">
                <div class="ml-5 flex flex-col">
                    <h1 class="text-xl leading-8 font-bold text-black">{{ $produit->name }}</h1>
                    <h2 class="text-xl font-semibold text-gray-500">{{$produit->price}}</h2>
                    <a class="px-3 py-3 mt-2 flex items-center justify-center rounded-md bg-blue-600 text-white my-3" href="/produit/{{$produit->id}}/edit">Editer</a>
                    <form action="/produit/{{$produit->id}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button class="px-3 py-3 mt-2 flex items-center justify-center rounded-md bg-red-600 text-white my-3">Supprimer</button>
                    </form>
                </div>


            </div>


        </div>
    </div>




</x-app-layout>
