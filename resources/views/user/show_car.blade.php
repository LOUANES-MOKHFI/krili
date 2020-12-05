@extends('layouts.app')
@section('title')
   Vehicules
@endsection
@section('header')
<style type="text/css">
    .uppercase{text-transform: uppercase;}
</style>
@endsection
@section('content')


 <section id="page-title-area" class="section-padding overlay" style="height: 200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>{{$car->marque}}-{{$car->cars}}</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    
            </div>
        </div>
    </div>
</section>
 <section id="car-list-area" class="section-padding">
        <div class="container">
            @include('layouts.flash_msg')
            <div class="row">
                
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2>{{$car->marque}}-{{$car->cars}}<span class="price">PRIX: <b style="color: red">${{$car->prix}}/JOUR</b></span></h2>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="{{asset('/images/'.$car->image1)}}" alt="{{$car->car}}">
                            </div>
                            <div class="single-car-preview">
                                 <img src="{{asset('/images/'.$car->image2)}}" alt="{{$car->car}}">
                            </div>
                            <div class="single-car-preview">
                                 <img src="{{asset('/images/'.$car->image2)}}" alt="{{$car->car}}">
                            </div>
                        </div>
                        <div class="car-details-info">
                            <h4>plus d'informations</h4>
                            <p>{{$car->description}}.</p>

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>ENERGIE</th>
                                                    <td>{{$car->energie}}</td>
                                                </tr>
                                                <tr>
                                                    <th>NOMBRE DE PORTS</th>
                                                    <td>{{$car->number_port}}</td>
                                                </tr>
                                                <tr>
                                                    <th>COULEUR</th>
                                                    <td>{{$car->couleur}}</td>
                                                </tr>
                                                <tr>
                                                    <th>MATRICULE</th>
                                                    <td>{{$car->matricule}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="tech-info-list">
                                            <ul>
                                                <li>{{ $car->abs==1? 'ABS' : 'NON ABS' }}</li>
                                                <li>{{$car->climatisation==1? 'climatisée' : 'N\'est pas climatisée' }}</li>
                                                <li>{{ $car->gps==1? 'GPS' : 'SANS GPS' }}</li>
                                                <li>{{ $car->kilometrage }} KM</li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                           
                        </div>
                    </div>
                </div>
                <!-- Car List Content End -->

                <!-- Sidebar Area Start -->
                <div class="col-lg-4">
                    <div class="sidebar-content-wrap m-t-50">
                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>informations d'agence</h3>

                            <div class="sidebar-body">
                                <p><i class="fa fa-mobile"></i> 0{{$agence->num_tlfn}}</p>
                                <p><i class="fa fa-envelope"></i> {{$agence->email}}</p>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        <!-- Single Sidebar Start -->
                        <div class="single-sidebar">
                            <h3>autres vehicules</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    @foreach(Cars_agence($agence->id) as $cars)
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('/images/'.$cars->image1)}}" alt="JSOFT"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">{{$cars->marque}}-{{$cars->cars}}</a></h4>
                                            <span class="date"></span>
                                        </div>
                                    </li>
                                    @endforeach

                                  
                                </ul>
                            </div>
                        </div>
                        <!-- Single Sidebar End -->

                        @if(!empty($agence->fb) || !empty($agence->twitter) || !empty($agence->insta)) 

                        <div class="single-sidebar">
                            <h3>Page pour l'agence</h3>

                            <div class="sidebar-body">
                                <div class="social-icons text-center">
                                  @if(!empty($agence->fb))
                                    <a href="{{$agence->fb}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    @endif
                                      @if(!empty($agence->twitter))
                                    <a href="{{$agence->twitter}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    @endif
                                      @if(!empty($agence->insta))
                                    <a href="{{$agence->insta}}" target="_blank"><i class="fa fa-instagram"></i></a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="text-center">
                                   <a onclick="document.getElementById('louer_v').style.display='block'"  class="form-submit btn btn-success node-add-to-cart btn elevation-8dp text-center" style="width:200px;color: white">LOUER
                                    </a>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
    
  @include('user.louer_vehicule')

@endsection
@section('footer')

@endsection
       
