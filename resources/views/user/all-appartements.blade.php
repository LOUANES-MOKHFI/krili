@extends('layouts.app')
@section('title')
   Tout les Appartements
@endsection
@section('header')
<style type="text/css">
     .li:hover{
        background-color: blue;
    }
</style>
@endsection
@section('content')

 <section id="page-title-area" class="section-padding overlay" style="height: 200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>TOUT LES APPARTEMENTS</h2>
                    <span class="title-line"><i class="fa fa-home"></i></span>
                    
            </div>
        </div>
    </div>
</section>

 <section id="car-list-area" class="section-padding">
        <div class="container">
             <div class="row">
               
      <div class="col-lg-3">
        <div class="book-a-car" style="margin-top: 0px;padding: 0px 0px">
                <div class="pickup-location book-item">
                    <h4>TRIER PAR TYPE</h4>
                        <button class="btn btn-default dropdown-toggle form-control text-left" type="button" data-toggle="dropdown" value="" style="border: 1px solid black">-- TOUT --</button>
                        <ul class="dropdown-menu" role="menu" style="width: 260px">
                        @foreach (Type_appartement() as $type)
                            <li value="{{ $type->type_appartement }}" class="li"><a href="{{url('/tout-les-appartements/'.$type->type_appartement)}}" style="color: black">{{ $type->type_appartement }}</a></li>
                        @endforeach
                        </ul>
                </div>
        </div>
      </div>
       <div class="col-lg-3">
        <div class="book-a-car" style="margin-top: 0px;padding: 0px 0px">
                <div class="pickup-location book-item">
                    <h4>TRIER PAR WILAYA</h4>
                        <button class="btn btn-default dropdown-toggle form-control text-left" type="button" data-toggle="dropdown" value="" style="border: 1px solid black">-- TOUT --</button>
                        <ul class="dropdown-menu" role="menu" style="width: 260px">
                        @foreach (Wilaya_appartement() as $wilaya)
                            <li value="{{ $wilaya->wilaya }}" class="li"><a href="{{url('/tout-les-appartement/'.$wilaya->wilaya)}}" style="color: black">{{ $wilaya->wilaya }}</a></li>
                        @endforeach
                        </ul>
                </div>
        </div>
      </div>
  </div>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                             @if(count($appartements) == 0)
                              <div class="container text-center">
                                    <p class="thme-blockquote">
                                    AUCUN APPARTEMENTS N'EXISTE</p>

                              </div>
                            @else
                            @foreach($appartements as $appartement)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb" >
                                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                               <img src="{{asset('/images/'.$appartement->image1)}}" alt="{{$appartement->type_appartement}}" style="height: 350px">
                            </div>
                            <div class="single-car-preview">
                               <img src="{{asset('/images/'.$appartement->image2)}}" alt="{{$appartement->type_appartement}}" style="height: 350px">
                            </div>
                            <div class="single-car-preview">
                                <img src="{{asset('/images/'.$appartement->image3)}}" alt="{{$appartement->type_appartement}}" style="height: 350px">
                            </div>
                        </div>
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <h1 style="font-size: 20px;margin-top: 50px">{{$appartement->type_appartement}} à {{$appartement->ville}}-{{$appartement->wilaya}}</h1>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <p class="rating" style="font-size: 18px;font-weight: bold;margin-top: 0px">
                                           {{$appartement->prix}} DA/ Jour
                                                </p>
                                            </div>
                                        </div>
                                        <p>{{$appartement->description}}</p>
                                         <ul class="car-info-list">
                                            <li>{{ $appartement->rue}}</li>
                                           
                                             <li>etat: {{ $appartement->etat }}</li>
                                        </ul>
                                        <ul class="car-info-list">
                                            <li>{{ $appartement->etage}} eme etage</li>
                                            <li>{{$appartement->number_room}} chambre(s)</li>
                                           
                                        </ul>
                                         @if(empty(reserver_appartement($appartement->id)))
                                        <a href="#" onclick="document.getElementById('reserver').style.display='block'" class="btn btn-danger"  disabled="disabled">RESERVER</a>
                                        @else
                                        <a href="{{url('/agences-des-appartement/appartement/'.$appartement->id.'/'.$appartement->type_appartement)}}" class="rent-btn">LOUER</a>
                                        @endif
                                       
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{$appartements->links()}}
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    
 
    @include('layouts.appartement_reserver',array('appartement' => isset($appartement)? $appartement: null))

@endsection
@section('footer')

@endsection
       
