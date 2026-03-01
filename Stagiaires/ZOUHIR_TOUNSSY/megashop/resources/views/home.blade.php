<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - MegaShop</title>
    <link rel="stylesheet" href={{ asset('/style.css') }}>
</head>
<body>
    @extends ('layouts.app')
    @section ('content')
    <main>
        <div class="hero">
            <h1>Bienvenue chez MegaShop</h1>
            <p>Découvrez notre sélection complète d'électronique et d'électroménager</p>
            <a href="#categories" class="btn">Voir nos catégories</a>
        </div>

        <section id="categories">
            <h2 class="page-title">Nos Catégories</h2>
            <div class="categories-grid">
                @foreach ($categories as $key => $value)
                    <div class="category-card">
                        <h3>{{$value['icon']}} {{$value['name']}}</h3>
                        <p>{{$value['description']}}</p>
                        <a href={{route('category',['slug'=> $value['slug']])}} class="btn">Voir les produits</a>
                    </div>
                @endforeach
            </div>
        </section>

        
    </main>
    @endsection
</body>
</html>
