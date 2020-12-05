@extends('layouts.app')
@section('title')
   A propos
@endsection
@section('header')

@endsection
@section('content')

 <section id="page-title-area" class="section-padding overlay" style="height: 200px">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>A propos</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-area" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>KRILI est un plateforme de location des vehicules au niveau nationale dont le but de facilité les opération de location dans notre ALGERIE.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/designe/assets/img/home-2-about.png" alt="JSOFT">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        @foreach(cars() as $marque)
                        <div class="single-partner">
                          <div class="display-table">
                                <div class="display-table-cell">
                                    <h1 style="font-size: 22px">{{$marque->marque}}</h1>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="about-area" class="section-padding">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="about-content">
                                <p>KRILI est un plateforme de location des appartements au niveau nationale dont le but de facilité les opération de location dans notre ALGERIE.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/designe/assets/img/architecture-1836070_1920.jpg" alt="JSOFT" height="150" width="400">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        @foreach(Appartements() as $type)
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <h1 style="font-size: 22px">{{$type->type_appartement}}</h1>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('footer')

@endsection
       
