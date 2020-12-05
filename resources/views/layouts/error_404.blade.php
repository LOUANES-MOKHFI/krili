@extends('layouts.app')
@section('title')
   Erreur 404
@endsection
@section('header')

@endsection
@section('content')



 <section id="page-404-wrap" class="section-padding overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="page-404-content">
                    <div class="number">
                        <div class="four">4</div>
                        <div class="zero">
                            <img src="/designe/assets/img/404.png" alt="JSOFT">
                        </div>
                        <div class="four">4</div>
                    </div>
                    <h4>PAGE NOT FOUND !</h4>
                    <p>SORRY, WE COULDN'T FIND THE PAGE <br> YOU'RE LOOKING.</p>
                    <a href="{{url('/home')}}" class="btn-404-home"><i class="fa fa-home"></i>Go to Home</a>
                </div>
            </div>
        </div>
    </div>
</section>
    
 

@endsection
@section('footer')

@endsection
       
