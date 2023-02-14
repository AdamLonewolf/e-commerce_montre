@extends('layout')
@section('contenu')
{{-- {{dump($montre)}} --}}

@include('portion.header')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        
        
        <li class="breadcrumb-item"><a href="{{route('accueil')}}">Accueil</a></li>
        <li class="breadcrumb-item active"><a href="{{route('Voir_categorie_produit', ["id"=>$montre->pere->id])}}"> {{$montre->pere->nom}} </a></li>
        @if ($montre->pere->categorieParent !== null)
        <li class="breadcrumb-item"><a href="{{route('Voir_categorie_produit', ["id"=>$montre->pere->categorieParent->id])}}"> {{$montre->pere->categorieParent->nom}} </a></li>
        @else
        &nbsp;&nbsp; 
        <li class="breadcrumb-item active"><a href="">Pas de sous catégorie</a></li>
        &nbsp; &nbsp; 
        @endif

        
    </ol>
</nav>

<main role="main">


    <div class="container">


        <div class="row justify-content-between">

            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{URL::to('/img/'. $montre->image)}}" alt="Card image cap">

                </div>
            </div>
            <div class="col-6">

                <h1 class="jumbotron-heading"> {{$montre->nom}} </h1>
                <h5>{{$montre->montant}} CFA</h5>
                <p class="lead text-muted">{{$montre->description}}</p>
                @foreach ($montre->slugs as $slug)
                <p class="text-white">
                    <a href="{{Route('Voir_slug_produit', ["id" => $slug->id])}}" class="badge badge-dark">
                      {{$slug->libelle}}
                    </a> 
                </p>
                @endforeach
                <hr>
                <label for="size">Choisissez votre taille</label>
                <select name="size" id="size" class="form-control">
                    <option value="xs">XS</option>
                    <option value="s">S</option>
                    <option value="m">M</option>
                    <option value="l">L</option>
                    <option value="xl">XL</option>
                    <option value="xxl">XXL</option>
                </select>
                <p>
                    <a href="#" class="btn btn-cart my-2 btn-block"><i class="fas fa-shopping-cart"></i> Ajouter au Panier</a>
                </p>

            </div>
        </div>
    </div>


<div class="album py-5 bg-light">
    <div class="container">
        <div class="row">
            <h3>Vous aimerez aussi :</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{URL::to('/img/1.jpeg' )}}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{URL::to('/img/2.jpeg' )}}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="{{URL::to('/img/3.jpeg' )}}" class="card-img-top img-fluid" alt="Responsive image">

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

</main>
@endsection