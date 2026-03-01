<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détail Produit - MegaShop</title>
    <link rel="stylesheet" href="{{ asset("style.css")}} " >
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <main>
        <div class="breadcrumb">
            <a href="{{ route('home') }}">Accueil</a>
            <span>/</span>
            <a href="{{ route('category',['slug' => $slug ])}}">{{$category['icon'] }} {{ $category['name']}}</a>
            <span>/</span>
            <strong>{{$product['name']}}</strong>
        </div>

        <h1 class="page-title">Détail du Produit</h1>

        <div class="product-detail">
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 40px;">
                <div>
                    <div class="product-detail-img"><img src="{{ asset($product['image']) }}" alt="{{$product['name']}}"  width="600"/></div>
                </div>
                <div class="product-detail-info">
                    <h2>{{$product['name']}}</h2>
                    <div class="product-detail-price">{{$product['price']}} €</div>
                    
                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Disponibilité</h3>
                        <p style="color: #27ae60; font-weight: bold; font-size: 18px;">✓ En stock ({{ $product['stock'] }} unités disponibles)</p>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <h3 style="color: #2c3e50; margin-bottom: 10px;">Évaluation</h3>
                        <p style="color: #f39c12; font-size: 18px;">⭐⭐⭐⭐⭐ ({{$product['rating'] }} /5 - 156 avis)</p>
                    </div>

                    <button class="btn btn-secondary" style="width: 100%; padding: 15px; font-size: 18px; margin-bottom: 10px;">Ajouter au panier</button>
                    <button class="btn" style="width: 100%; padding: 15px; font-size: 18px;">Acheter maintenant</button>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px;">
                <div>
                    <div class="product-specs">
                        <h3>Caractéristiques Principales</h3>
                        <ul>
                            @foreach ($product['specs'] as $k => $v)
                                <li><strong> {{ $k }} :</strong> {{ $v }}</li> 
                            @endforeach 
                        </ul>
                    </div>
                </div>

                <div>
                    <div class="product-specs">
                        <h3>Connexions & Ports</h3>
                        <ul>
                            @foreach ($product['ports'] as $v )
                                <li>  {{ $v }} </li> 
                            @endforeach 
                        </ul>
                    </div>
                </div>
            </div>

            <div style="margin-top: 40px; background: #ecf0f1; padding: 25px; border-radius: 8px;">
                <h3 style="color: #2c3e50; margin-bottom: 15px;">Description Détaillée</h3>
                <p style="margin-bottom: 15px;">
                        {{$product['details']}}
                </p>
            </div>

            

            <div style="margin-top: 40px; background: #fff3cd; padding: 20px; border-radius: 8px; border-left: 4px solid #ffc107;">
                <h4 style="color: #856404; margin-bottom: 10px;">📦 Livraison et Service</h4>
                <ul style="color: #856404; margin-left: 20px;">
                    <li>Livraison gratuite en France métropolitaine</li>
                    <li>Garantie 2 ans pièces et main d'œuvre</li>
                    <li>Service client disponible 7j/7</li>
                    <li>Retour gratuit sous 30 jours</li>
                    <li>Installation et configuration gratuites</li>
                </ul>
            </div>
        </div>
    </main>
    @endsection

</body>
</html>

        
