@extends('layouts.app')
@section('title')
   Accueil
@endsection
@section('header')
<style type="text/css">

</style>
@endsection
@section('content')


    <section id="slideslow-bg" style="height: 657px;" class="vegas-container">
        <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in vegas-transition-fade-out" style="transition: all 2000ms ease 0s;">
            <div class="vegas-slide-inner vegas-animation-kenburnsDownLeft" style="background-image: url(&quot;/designe/assets/img/slider-img/slider-img-3.jpg&quot;); background-color: rgb(0, 0, 0); background-position: center center; background-size: cover; animation-duration: 20000ms;">
                
            </div>
        </div>
        <div class="vegas-slide vegas-transition-fade vegas-transition-fade-in" style="transition: all 2000ms ease 0s;">
            <div class="vegas-slide-inner vegas-animation-kenburnsUp" style="background-image: url(&quot;/designe/assets/img/slider-img/slider-img-4.jpg&quot;); background-color: rgb(0, 0, 0); background-position: center center; background-size: cover; animation-duration: 20000ms;">
                
            </div>
        </div>
        <div class="vegas-overlay"></div>
        <div class="vegas-timer vegas-timer-running">
            <div class="vegas-timer-progress" style="transition-duration: 3900ms;">
                
            </div>
        </div>
        <div class="vegas-wrapper" style="overflow: visible; padding: 0px;"><div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="slideshowcontent">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <h1>RÉSERVEZ UN VEHICULE, UN APPARTEMENT !</h1>
                                <p>{{getsetting()->slegon}}</p>

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section id="service-area" class="section-padding">
        <div class="container">
            <div class="row">
                           <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nos Services</h2>
                        <span class="title-line"><i class="fa fa-cubes"></i></span>
                        <p>Equipe KRILI vous propose les services ci-dessus</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11 m-auto text-center">
                    <div class="service-container-wrap">
                        <!-- Single Service Start -->
                        <div class="service-item">
                            <i class="fa fa-car"></i>
                            <h3>LOCATION DES VEHICULES</h3>
                            <p>Plateforme KRILI vous proposez des services de location des vehicules</p>
                        </div>
                        <div class="service-item">
                            <i class="fa fa-bank"></i>
                            <h3>LOCATION DES APPARTEMENTS</h3>
                            <p>Plateforme KRILI vous proposez des services de location des appartements</p>
                        </div>

                        <div class="service-item">
                            <i class="fa fa-phone"></i>
                            <h3>contacter équipe KRILI</h3>
                            <p>Plateforme KRILI vous donnez la possiblite de contacter les agences</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--div id="partner-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="partner-content-wrap">
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-2.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-3.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>

                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-5.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-1.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                        <div class="single-partner">
                            <div class="display-table">
                                <div class="display-table-cell">
                                    <img src="/designe/assets/img/partner/partner-logo-4.png" alt="JSOFT">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->
    <section id="funfact-area" class="overlay section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-11 col-md-12 m-auto">
                    <div class="funfact-content-wrap">
                        <div class="row">
                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-bank"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">{{count(Agence())}}</span>+</p>
                                        <h4>AGENCES</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->

                            <!-- Single FunFact Start -->
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-car"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">{{count_Cars()}}</span>+</p>
                                        <h4>VEHICULES</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-funfact">
                                    <div class="funfact-icon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                    <div class="funfact-content">
                                        <p><span class="counter">{{count_Appartements()}}</span>+</p>
                                        <h4>APPARTEMENTS</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- Single FunFact End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Fun Fact Area End ==-->

    <!--== Choose Car Area Start ==-->
    <section id="choose-car" class="section-padding" style="margin-top: 0px;padding: 30px 0">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>choisir ton vehicule</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="row popular-car-gird">
                                  @foreach(last_Cars() as $car)
                                    <div class="col-lg-4 col-md-4 con suv mpv">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="{{asset('/images/'.$car->image2)}}">
                                                    <img src="{{asset('/images/'.$car->image1)}}" alt="{{$car->marque}}" style="height: 350px">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="{{url('/agences-des-vehicule/vehicule/'.$car->id.'/'.$car->cars)}}">{{$car->marque}}-{{$car->cars}}</a>
                                                    <span class="price"><i class="fa fa-tag"></i> {{$car->prix}}/JOUR</span>
                                                </h3>

                                                <h5>{{str_limit($car->description,50)}}</h5>

                                                <div class="p-car-feature">
                                                    <a>{{ $car->abs==1? 'ABS' : 'NON ABS' }}</a>
                                                    <a>{{$car->energie}}</a>
                                                    <a>{{ $car->climatisation==1? 'CLIMATISEE' : 'N\'EST PAS CLIMATISEE' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section id="choose-car" class="section-padding" style="margin-top: 0px;padding: 30px 0">
        <div class="container">
            <div class="row">
                <!-- Section Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nouveaux apartements</h2>
                        <span class="title-line"><i class="fa fa-home"></i></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-ur-cars">
                        <div class="row">
                           <div class="col-lg-12">
                                <div class="row popular-car-gird">
                                  @foreach(last_Appartements() as $appartement)
                                    <div class="col-lg-4 col-md-4 con suv mpv">
                                        <div class="single-popular-car">
                                            <div class="p-car-thumbnails">
                                                <a class="car-hover" href="{{asset('/images/'.$appartement->image2)}}">
                                                    <img src="{{asset('/images/'.$appartement->image1)}}" alt="{{$appartement->type_appartement}}"  style="height: 350px">
                                                </a>
                                            </div>

                                            <div class="p-car-content">
                                                <h3>
                                                    <a href="{{url('/agences-des-appartement/appartement/'.$appartement->id.'/'.$appartement->type_appartement)}}">{{$appartement->type_appartement}} à {{$appartement->ville}}</a>
                                                    <span class="price"><i class="fa fa-tag"></i> {{$appartement->prix}}/JOUR</span>
                                                </h3>

                                                <h5>{{str_limit($appartement->description,50)}}</h5>

                                                <div class="p-car-feature">
                                                    <a>{{ $appartement->etat}}</a>
                                                    <a>{{$appartement->etage}} éme etage</a>
                                                    <a>{{ $appartement->number_room }} chambre(s)</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team-area" class="section-padding" style="margin-top: 0px;padding: 30px 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Nouveaux Agences</h2>
                        <span class="title-line"><i class="fa fa-bank"></i></span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="team-content">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="team-tab-menu">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        @foreach(last_Agence() as $agence)
                                        <li class="nav-item">
                                            <a class="nav-link" id="{{$agence->id}}" data-toggle="tab" href="#team_member_{{$agence->id}}" role="tab" aria-selected="true">
                                                <div class="team-mem-icon">
                                                    @if(empty($agence->logo))
                                                    <img src="{{asset('/images/'.getSetting()->logo)}}">
                                                    @else
                                                    <img src="{{asset('/images/'.$agence->logo)}}" alt="{{$agence->name}}">
                                                    @endif
                                                </div>
                                                <h5>{{$agence->name}}</h5>
                                            </a>
                                        </li>
                                        @endforeach
                                     </ul>
                                </div>
                            </div>

                            <div class="col-lg-8">

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="team_member" role="tabpanel" aria-labelledby="">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="car-preview-crousel">
                                            @foreach(last_Agence() as $agence)
                                                <div class="single-car-preview">
                                                   @if(empty($agence->logo))
                                                    <img src="{{asset('/images/'.getSetting()->logo)}}">
                                                    @else
                                                    <img src="{{asset('/images/'.$agence->logo)}}" alt="{{$agence->name}}">
                                                    @endif
                                                </div>
                                            @endforeach
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach(last_Agence() as $agence)
                                    <div class="tab-pane fade show" id="team_member_{{$agence->id}}" role="tabpanel" aria-labelledby="{{$agence->id}}">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-pro-pic" >
                                                   @if(empty($agence->logo))
                                                    <img src="{{asset('/images/'.getSetting()->logo)}}">
                                                    @else
                                                    <img src="{{asset('/images/'.$agence->logo)}}" alt="{{$agence->name}}">
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="team-member-info text-center">
                                                    <h4>{{$agence->name}}</h4>
                                                    <h5>{{$agence->type_agence}}</h5>
                                                    <span class="quote-icon"><i class="fa fa-quote-left"></i></span>
                                                    <p>{{str_limit($agence->description,150)}}</p>
                                                    <div class="team-social-icon">
                                                        <a href="{{$agence->fb}}"><i class="fa fa-facebook"></i></a>
                                                        <a href="{{$agence->twitter}}"><i class="fa fa-twitter"></i></a>
                                                        <a href="{{$agence->insta}}"><i class="fa fa-instagram"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('footer')

<script type="text/javascript">
  $('#wilaya').on('change',function(e){
                console.log(e);
                var wilaya = e.target.value;

                //ajax
                $.get('/ajax-agence?wilaya=' + wilaya,function(data){
                    $('#agence').empty();
                   $.each(data, function(welcome,agence){
                     // alert(faculte.id);
                      $('#agence').append('<option value="' +agence.name+'">'+ agence.name+'</option>');
                   });
                });
              });
</script>
<script type="text/javascript">
  $('#agence').on('change',function(e){
                console.log(e);
                var agence = e.target.value;

                //ajax
                $.get('/ajax-cars?agence=' + agence,function(data){
                    $('#cars').empty();
                   $.each(data, function(welcome,cars){
                     // alert(faculte.id);
                      $('#cars').append('<option value="' +cars.cars+'">'+ cars.cars+'</option>');
                   });
                });
              });
</script>


@endsection
       
