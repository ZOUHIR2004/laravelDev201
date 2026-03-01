<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pageInfo['title']}}</title>
    <link rel="stylesheet" href={{ asset('/style.css') }} >
</head>
<body>
    @extends("layouts.app")
    @section('content')
       <main>
        <div class="breadcrumb">
            <a href={{route("home")}}>Accueil</a>
            <span>/</span>
            <strong>{{$category['name']}}</strong>
        </div>

        <h1 class="page-title">{{$category['icon']}} {{$category['name']}}</h1>
        <div class="products-grid">
            @foreach ($productInfo as $item)
                <div class="product-card">
                    <div class="product-image"><img src="{{asset($item['image'])}}" alt="{{$item['name']}}" height="200" width="300"/></div>
                    <div class="product-info">
                        <div class="product-name">{{$item['name']}}</div>
                        <div class="product-price">{{$item['price']}} $</div>
                        <div class="product-description">{{$item['description']}}</div>
                        <a href={{ route('produit_details',['slug' => $item['category'],'id' => $item['id']])}} class="btn">Détails</a>
                    </div>
                </div>
            @endforeach
        </div>        
    @endsection
</body>
</html>
