@extends('layouts.app')
@section('title')
    Services
@endsection
@section('header')
<style type="text/css">
    #header-area .mainmenu ul li.active a{
    color: #ffd000;
}
</style>
@endsection
@section('content') 
<section id="page-title-area" class="section-padding overlay" style="height: 350px;">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Services</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p>Plateforme KRILI vous propose des services de location </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="service-page-wrapper" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-service-item">
                        <div class="service-item-thumb" style="background-image: url(/designe/assets/img/car/car-1.jpg);"></div>
                        <div class="service-item-content">
                            <h3>LOCATION DES VEHICULES</h3>
                            <p>Les Agences de location des vehicules vous offres la possibilte des reservation en ligne via la plateforme krili, Nous proposons avec notre plateforme un ensemble des agences pour faciliter votre vie. </p>
                        </div>
                    </div>

                    <div class="single-service-item">
                        <div class="service-item-thumb d-lg-none d-md-block"></div>

                        <div class="service-item-content">
                            <h3>LOCATION DES APPARTEMENTS</h3>
                            <p>Les Agences de location des Appartements vous offres la possibilte des reservation en ligne via la plateforme krili, Nous proposons avec notre plateforme un ensemble des agences pour faciliter votre vie. </p>
                        </div>
                        <div class="service-item-thumb  d-none d-lg-block d-md-none"  style="background-image: url(/designe/assets/img/architecture-1836070_1920.jpg);"></div>
                    </div>
  
                    <div class="single-service-item">
                        <!--div class="service-item-thumb ser-thumb-bg-3"></div-->
                       
                    </div>
                    <div class="single-service-item">
                        <!--div class="service-item-thumb ser-thumb-bg-4 d-lg-none d-md-block"></di--v>
                        
                        <div class="service-item-thumb ser-thumb-bg-2 d-none d-lg-block d-md-none"></div-->
                    </div>
                </div>
            </div>
        </div>
    </section>
  
@endsection
@section('footer')

@endsection
       
