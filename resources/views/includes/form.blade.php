@csrf
    <h2 class="text-lg leading-6 font-medium text-black">Nom du produit</h2>
    <input class="focus:border-light-blue-500 @error('name') border-red-500 @enderror focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-3 pl-10 my-1" type="text" aria-label="Ajout produit" name="name" value="{{old('name') ?? $produit->name}}" placeholder="Ajouter le nom du produit" />
    <h2 class="text-lg leading-6 font-medium text-black">Prix du produit</h2>
    <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 @error('price') border-red-500 @enderror focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-3 pl-10 my-1" type="text" aria-label="Ajout produit" name="price" value="{{old('price')?? $produit->price}}" placeholder="Ajouter le prix du produit" />
    <h2 class="text-lg leading-6 font-medium text-black">Image du produit</h2>
    <input class="focus:border-light-blue-500 focus:ring-1 focus:ring-light-blue-500 focus:outline-none w-full text-sm text-black placeholder-gray-500 border border-gray-200 rounded-md py-3 pl-10 my-1" type="text" aria-label="Ajout produit" name="url_img" value="{{old('url_img') ?? $produit->url_img}}" placeholder="Ajouter l'URL de l'image" />
