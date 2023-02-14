    @extends('layout')
    @section('contenu')
    @include('portion.header')
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @if (isset($categoryPere))
                    @if ($categoryPere !== null)
                    <li class="breadcrumb-item active" aria-current="page"><a href="{{Route('Voir_categorie_produit',["id" =>$categoryPere->id])}}">{{$categoryPere->nom}}</a></li>    
                    @endif
                    @foreach ($categoryPere->pereCategory as $categoryP)
                    <li class="breadcrumb-item"><a href="{{Route('Voir_categorie_produit',["id" =>$categoryP->id])}}">{{$categoryP->nom}}</a></li>
                    @endforeach
            @else
            <li class="breadcrumb-item active" aria-current="page"><a href="{{Route('Voir_slug_produit',["id" =>$slug->id])}}">{{$slug->libelle}}</a></li>  
            @endif
            
           
        
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
                                    <p class="text-white">
                                        <span class="badge badge-dark">
                                            {{$produit->pere->nom}}
                                        </span> 
                                    </p>
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