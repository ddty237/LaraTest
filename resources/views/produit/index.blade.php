<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="/produit/create" class="px-5 py-5 mt-2 flex items-center justify-center rounded-md bg-black text-white my-6">Nouveau produit</a>

                    @foreach($produits as $produit)
                    <div class="flex">
                        <div class="flex-none w-48 relative">
                          <img src="{{$produit->url_img}}" alt="" class="absolute inset-0 w-full h-full object-cover" />
                        </div>
                        <form class="flex-auto p-6">
                          <div class="flex flex-wrap">
                            <h1 class="flex-auto text-xl font-semibold">
                              <a href="/produit/{{ $produit->id }}">{{$produit->name}}</a>
                            </h1>
                            <div class="text-xl font-semibold text-gray-500">
                              {{$produit->price}} Fcfa
                            </div>
                          </div>

                          <div class="flex space-x-3 mb-4 text-sm font-medium">
                            <div class="flex-auto flex space-x-3">
                              <button class="px-5 py-5 mt-2 flex items-center justify-center rounded-md bg-black text-white" type="submit">Commander</button>
                            </div>
                          </div>
                        </form>
                      </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
