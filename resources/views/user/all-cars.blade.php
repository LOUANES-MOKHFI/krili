@extends('layouts.app')
@section('title')
   Tous les Vehicules
@endsection
@section('header')
<style type="text/css">
    .uppercase{text-transform: uppercase;}
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
                    <h2>TOUS LES VEHICULES</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    
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
                    <h4>TRIER PAR MARQUE</h4>
                        <button class="btn btn-default dropdown-toggle form-control text-left" type="button" data-toggle="dropdown" value="" style="border: 1px solid black">-- TOUT --</button>
                        <ul class="dropdown-menu" role="menu" style="width: 260px">
                        @foreach (Marque() as $marque)
                            <li value="{{ $marque->marque }}" class="li"><a href="{{url('/tout-les-vehicules/'.$marque->marque)}}" style="color: black">{{ $marque->marque }}</a></li>
                        @endforeach
                        </ul>
                </div>
        </div>
      </div>
  </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="car-list-content">
                        <div class="row">
                            @if(count($vehicules) == 0)
                              <div class="container text-center">
                                    <p class="thme-blockquote">
                                    AUCUN VEHICULES N'EXISTE</p>

                              </div>
                            @else
                            @foreach($vehicules as $vehicule)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                    <div class="car-list-thumb">
                                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                               <img src="{{asset('/images/'.$vehicule->image1)}}" alt="{{$vehicule->cars}}"  style="height: 330px">
                            </div>
                            <div class="single-car-preview">
                               <img src="{{asset('/images/'.$vehicule->image2)}}" alt="{{$vehicule->cars}}"  style="height: 330px">
                            </div>
                            <div class="single-car-preview">
                                <img src="{{asset('/images/'.$vehicule->image3)}}" alt="{{$vehicule->cars}}"  style="height: 330px">
                            </div>
                        </div>
                                    </div>
                                    <div class="car-list-info without-bar">
                                        <div class="row">
                                            <div class="col-md-6 col-lg-6">
                                                <h1 style="font-size: 20px;margin-top: 20px">{{$vehicule->marque}}-{{$vehicule->cars}}</h1>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                                <p class="rating" style="font-size: 18px;font-weight: bold">
                                           {{$vehicule->prix}} DA/ Jour
                                        </p>
                                            </div>
                                        </div>
                                        
                                        <p>{{$vehicule->description}}</p>
                                         <ul class="car-info-list">
                                            <li>{{ $vehicule->abs==1? 'ABS' : 'NON ABS' }}</li>
                                            <li>{{$vehicule->energie}}</li>
                                            <li>{{ $vehicule->climatisation==1? 'CLIMATISEE' : 'N\'EST PAS CLIMATISEE' }}</li>
                                        </ul>
                                        <ul class="car-info-list">
                                            <li>{{ $vehicule->kilometrage}} KM</li>
                                            <li>{{$vehicule->number_port}}</li>
                                            <li>{{ $vehicule->gps==1? 'AVEC GPS' : 'SANS GPS' }}</li>
                                        </ul>
                                        
                                         @if(empty(reserver($vehicule->id)))
                                        <a href="#" onclick="document.getElementById('reserver').style.display='block'" class="btn btn-danger"  disabled="disabled">RESERVER</a>
                                        @else

                                        <a href="{{url('/agences-des-vehicule/vehicule/'.$vehicule->id.'/'.$vehicule->cars)}}" class="rent-btn">LOUER</a>
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
                                {{$vehicules->links()}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
 
   @include('layouts.vehicule_reserver',array('vehicule' => isset($vehicule)? $vehicule: null))

@endsection
@section('footer')

@endsection
       
