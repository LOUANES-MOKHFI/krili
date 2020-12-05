@extends('layouts.app')
@section('title')
   Appartements
@endsection
@section('header')

@endsection
@section('content')

 <section id="page-title-area" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>AGENCE {{$agence->name }}</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    <p>{{$agence->description}}</p>
            </div>
        </div>
    </div>
</section>

 <section id="car-list-area" class="section-padding">
        <div class="container">
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                             @if(count($appartements) == 0)
                              <div class="container text-center">
                                    <p class="thme-blockquote">L'AGENCE <span class="uppercase">{{$agence->name}}</span>
                                    NE CONTIENT AUCUN APPARTEMENTS</p>

                              </div>
                            @else
                            @foreach($appartements as $appartement)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb">
                                        <div class="car-preview-crousel">
                            <div class="single-car-preview" >
                               <img src="{{asset('/images/'.$appartement->image1)}}" alt="{{$appartement->type_appartement}}"  style="height: 350px">
                            </div>
                            <div class="single-car-preview" >
                               <img src="{{asset('/images/'.$appartement->image2)}}" alt="{{$appartement->type_appartement}}"  style="height: 350px">
                            </div>
                            <div class="single-car-preview" >
                                <img src="{{asset('/images/'.$appartement->image3)}}" alt="{{$appartement->type_appartement}}"  style="height: 350px">
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
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.appartement_reserver',array('appartement' => isset($appartement)? $appartement: null))


@endsection
@section('footer')

@endsection
       
