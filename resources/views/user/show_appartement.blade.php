@extends('layouts.app')
@section('title')
   Appartement
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
                    <h2>{{$appartement->type_appartement}} à {{$appartement->ville}}</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                    
            </div>
        </div>
    </div>
</section>
 <section id="car-list-area" class="section-padding">
        <div class="container">
             @include('layouts.flash_msg')
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-8">
                    <div class="car-details-content">
                        <h2 class="uppercase">{{$appartement->type_appartement}} à {{$appartement->ville}}<span class="price">PRIX: <b style="color: red">${{$appartement->prix}}/JOUR</b></span></h2>
                        <div class="car-preview-crousel" style="">
                            <div class="single-car-preview">
                                <img src="{{asset('/images/'.$appartement->image1)}}" alt="{{$appartement->type_appartement}}" height="">
                            </div>
                            <div class="single-car-preview">
                                 <img src="{{asset('/images/'.$appartement->image2)}}" alt="{{$appartement->type_appartement}}" height="">
                            </div>
                            <div class="single-car-preview">
                                 <img src="{{asset('/images/'.$appartement->image2)}}" alt="{{$appartement->type_appartement}}" height="">
                            </div>
                        </div>
                        <div class="car-details-info">
                            <h4>plus d'informations</h4>
                            <p>{{$appartement->description}}.</p>

                            <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tech-info-table">
                                             <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th>NOMBRE DES CHAMBRES</th>
                                                    <td>{{$appartement->number_room}}</td>
                                                    <th>ETAGE</th>
                                                    <td>{{ $appartement->etage}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RUE</th>
                                                    <td>{{ $appartement->rue}}</td>
                                                    <th>ETAT</th>
                                                    <td>{{ $appartement->etat}}</td>
                                                </tr>
                                                <tr>
                                                    <th>PRIX</th>
                                                    <td>{{$appartement->prix}}</td>
                                                </tr>
                                            </table>
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
                            <h3>autres appartements</h3>

                            <div class="sidebar-body">
                                <ul class="recent-tips">
                                    @foreach(Appartement_agence($agence->id) as $appartement)
                                    <li class="single-recent-tips">
                                        <div class="recent-tip-thum">
                                            <a href="#"><img src="{{asset('/images/'.$appartement->image1)}}" alt="{{$appartement->type_appartement}}"></a>
                                        </div>
                                        <div class="recent-tip-body">
                                            <h4><a href="#">{{$appartement->type_appartement}} à {{$appartement->ville}}</a></h4>
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
                                   <a onclick="document.getElementById('louer_a').style.display='block'"  class="form-submit btn btn-success node-add-to-cart btn elevation-8dp text-center" style="width:200px;color: white">LOUER
                                    </a>
                        </div>
                        <!-- Single Sidebar End -->
                    </div>
                </div>
                <!-- Sidebar Area End -->
            </div>
        </div>
    </section>
      @include('user.louer_appartement')

 

@endsection
@section('footer')

@endsection
       
