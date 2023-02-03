@extends('layout')
@section('contenu')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Films</li>
        <li class="breadcrumb-item"><a href="#">Les goonies</a></li>
        <li class="breadcrumb-item"><a href="#">Star Wars</a></li>
        <li class="breadcrumb-item"><a href="#">Star Trek</a></li>
        <li class="breadcrumb-item"><a href="#">Superman</a></li>
    </ol>
</nav>
<main role="main">


    <div class="py-3">
        <div class="container-fluid">
            
            <div class="row">
                @foreach ($produits as $produit)
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img src=" {{URL::to('/img/' . $produit->image)}} " class="card-img-top img-fluid" alt="Responsive image">
                            <div class="card-body">
                                <p class="card-text"> {{$produit->nom}} <br> {{$produit->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <i class="fa-solid fa-tags"></i>
                                    <span class="price"> {{$produit->montant}} FCFA</span>
                                    <a href=" {{route('Voir_article', ['id'=> $produit->id ])}} "><i class="fa-solid fa-eye" style="color: #F7DC6F"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            
        </div>
    </div>

</main>
@endsection