


@extends('products.produit')

@section('content')

<div class="row">
    @foreach($products as $product)
    <div class="col-xs-12 col-sm-6 col-md-4">
        <div class="card mb-3">
            <img src="{{ asset('img') }}/{{ $product->photo }}" class="card-img-top" alt="{{ $product->product_name }}">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title custom-title">{{ $product->product_name }}</h5>
                <p class="card-text custom-description">{{ $product->product_description }}</p>
                <div class="mt-auto">
                    <p class="card-text custom-price"><strong>Price: </strong>${{ $product->price }}</p>
                    <a href="{{ route('add_to_cart', $product->id) }}" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
    .card {
        width: 100%;
        height: 100%;
        border-radius: 10px; /* Arrondir les coins de la carte */
        box-shadow: 0 2px 4px  #038A80; /* Ajouter une ombre à la carte */
    }

    .card:hover {
        outline: 2px solid  #038A80; /* Couleur et épaisseur de la bordure au survol */
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
        transition: transform 0.3s ease-in-out;
    }

    .card-img-top:hover {
        transform: scale(1.2);
    }

    .custom-title {
        color: #038A80 ; /* Couleur personnalisée du titre */
        font-size: 20px; /* Taille de police personnalisée */
        font-weight: bold; /* Gras */
        text-transform: uppercase; /* Convertir en majuscules */
       
    }

    .custom-description {
        color: #7A7B7B; /* Couleur personnalisée de la description */
    }

    .custom-price {
        color:  #038A80; /* Couleur personnalisée du prix */
    }

    .btn-primary {
    
        color: white;
        background-color: #038A80;
        border-radius: 5px; /* Arrondir les coins du bouton */
    }
</style>

@endsection
