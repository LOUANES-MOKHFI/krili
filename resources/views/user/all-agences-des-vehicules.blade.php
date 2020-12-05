@extends('layouts.app')
@section('title')
   Agences
@endsection
@section('header')

@endsection
@section('content')

 <section id="page-title-area" class="section-padding overlay" style="height: 200px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title  text-center">
                    <h2>LOCATION DES VEHICULES</h2>
                    <span class="title-line"><i class="fa fa-car"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>

 <section id="car-list-area" class="section-padding">
     

        <div class="container" >
             <div class="col-lg-3">
        <div class="book-a-car" style="margin-top: 0px;padding: 0px 0px">
                <div class="pickup-location book-item">
                    <h4>TRIER PAR WILAYA</h4>
                        <button class="btn btn-default dropdown-toggle form-control text-left" type="button" data-toggle="dropdown" value="" style="border: 1px solid black">-- TOUT --</button>
                        <ul class="dropdown-menu" role="menu" style="width: 250px">
                        @foreach (Wilaya_v() as $wilaya)
                            <li value="{{ $wilaya->wilaya }}"><a href="{{url('/agences-des-vehicules/'.$wilaya->wilaya)}}" style="color: black">{{ $wilaya->wilaya }}</a></li>
                        @endforeach
                        </ul>
                </div>
        </div>
      </div>
            <div class="row">
                <!-- Car List Content Start -->
                <div class="col-lg-12">
                    <div class="car-list-content" id="agences">
                        <div class="row" >
                            @foreach($agences as $agence)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-car-wrap">
                                 
                                    <div class="car-list-thumb">
                                    @if(!empty($agence->logo))
                                        <img src="{{asset('/images/'.$agence->logo)}}" alt="{{$agence->name}}"  style="height: 330px;width: 540px">
                                    @else
                                         <img src="/designe/assets/img/location_v.jpg" alt="{{$agence->name}}"  style="height: 330px;width: 5340px">
                                    @endif
                                    </div>
                                    
                                    <div class="car-list-info without-bar">
                                        <h2><a href="#">{{$agence->name}}</a></h2>
                                        <p>{{str_limit($agence->description,150)}}</p>
                                        <ul class="car-info-list">
                                            <li>{{$agence->wilaya}}</li>
                                            <li>{{$agence->ville}}</li>
                                            <li>0{{$agence->num_tlfn}}</li>
                                        </ul>
                                        <!--p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star unmark"></i>
                                        </p-->
                                        <a href="{{url('/agences-des-vehicules/'.$agence->id.'/'.$agence->name)}}" class="rent-btn">VOIR PLUS</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="page-pagi">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                {{$agences->links()}}
                            </ul>
                        </nav>
                    </div>
                    <!-- Page Pagination End -->
                </div>
                <!-- Car List Content End -->
            </div>
        </div>
    </section>
    
 

@endsection
@section('footer')

<script type="text/javascript">
        $('#wilaya').on('change',function(e){
               // console.log(e);
                var wilaya = e.target.value;
                 alert(wilaya);
                //ajax
               $.ajax({
      type: 'get',
       dataType: "html",

      url: '{{url('/wilaya')}}',
      data: 'wilaya=' + wilaya,
      success:function(response){
      // console.log(dataType);

        $("#agences").html(response);
      }
    });
              });
</script>
@endsection
       
