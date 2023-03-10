@extends('master')
@section('fils')
<div class="album py-5 bg-light">
    <div class="container">
    {{-- {{dump($montreAll)}} --}}
      <div class="row">
        @foreach ($montreAll as $montre)
            
        
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
  
            <img class="card-image" src="{{asset("img/".$montre->image)}}">
            <div class="card-body">
              <p class="text-white">
                <a href="{{Route('Voir_categorie_produit', ["id" => $montre->pere->id])}}" class="badge badge-dark">
                  {{$montre->pere->nom}}
                </a> 
            </p>
              <h3>{{$montre->nom}}</h3>
              <p class="card-text">{{$montre->description}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <a href=""><i class="fa-solid bg-indigo-500 fa-tags"></i></a>
                <small class="text-muted">{{$montre->montant}} CFA</small>
                <a href=" {{Route('Voir_article',["id" => $montre->id])}} "><i class="fa-solid fa-eye" style="color: #F7DC6F"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection