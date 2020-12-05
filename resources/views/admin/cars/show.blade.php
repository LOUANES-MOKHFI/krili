@extends('admin.layouts.app')
@section('title')
      Vehicule
@endsection

@section('header')
      {!! Html::style('/designe/assets/css/font-awesome.css')!!}

    {!! Html::style('/designe/assets/css/style.css')!!}


<style type="text/css">
  .uppercase{
    text-transform: uppercase;
    font-size: 25px;
    font-weight: bold;
    color: red;
  }
 
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid transparent;
    border-radius: 0;
}
.card {
    margin-bottom: 30px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.57rem;
}

 .note-has-grid .nav-link {
     padding: .5rem
 }

 .note-has-grid .single-note-item .card {
     border-radius: 10px
 }

 .note-has-grid .single-note-item .favourite-note {
     cursor: pointer
 }

 .note-has-grid .single-note-item .side-stick {
     position: absolute;
     width: 3px;
     height: 35px;
     left: 0;
     background-color: rgba(82, 95, 127, .5)
 }

 .note-has-grid .single-note-item .category-dropdown.dropdown-toggle:after {
     display: none
 }

 .note-has-grid .single-note-item .category [class*=category-] {
     height: 15px;
     width: 15px;
     display: none
 }

 .note-has-grid .single-note-item .category [class*=category-]::after {
     content: "\f0d7";
     font: normal normal normal 14px/1 FontAwesome;
     font-size: 12px;
     color: #fff;
     position: absolute
 }

 .note-has-grid .single-note-item .category .category-business {
     background-color: rgba(44, 208, 126, .5);
     border: 2px solid #2cd07e
 }

 .note-has-grid .single-note-item .category .category-social {
     background-color: rgba(44, 171, 227, .5);
     border: 2px solid #2cabe3
 }

 .note-has-grid .single-note-item .category .category-important {
     background-color: rgba(255, 80, 80, .5);
     border: 2px solid #ff5050
 }

 .note-has-grid .single-note-item.all-category .point {
     color: rgba(82, 95, 127, .5)
 }

 .note-has-grid .single-note-item.note-business .point {
     color: rgba(44, 208, 126, .5)
 }

 .note-has-grid .single-note-item.note-business .side-stick {
     background-color: rgba(44, 208, 126, .5)
 }

 .note-has-grid .single-note-item.note-business .category .category-business {
     display: inline-block
 }

 .note-has-grid .single-note-item.note-favourite .favourite-note {
     color: #ffc107
 }

 .note-has-grid .single-note-item.note-social .point {
     color: rgba(44, 171, 227, .5)
 }

 .note-has-grid .single-note-item.note-social .side-stick {
     background-color: rgba(44, 171, 227, .5)
 }

 .note-has-grid .single-note-item.note-social .category .category-social {
     display: inline-block
 }

 .note-has-grid .single-note-item.note-important .point {
     color: rgba(255, 80, 80, .5)
 }

 .note-has-grid .single-note-item.note-important .side-stick {
     background-color: rgba(255, 80, 80, .5)
 }

 .note-has-grid .single-note-item.note-important .category .category-important {
     display: inline-block
 }

 .note-has-grid .single-note-item.all-category .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite .more-options {
     display: block
 }

 .note-has-grid .single-note-item.all-category.note-business .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-business .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-important .more-options,
 .note-has-grid .single-note-item.all-category.note-favourite.note-social .more-options,
 .note-has-grid .single-note-item.all-category.note-important .more-options,
 .note-has-grid .single-note-item.all-category.note-social .more-options {
     display: none
 }

 @media (max-width:767.98px) {
     .note-has-grid .single-note-item {
         max-width: 100%
     }
 }

 @media (max-width:991.98px) {
     .note-has-grid .single-note-item {
         max-width: 100%
     }
 }
</style>



@endsection
@section('content')
 <div class="content-header" style="margin-top: 0px;padding: 0px 0px ">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AFFICHE UNE VEHICULE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/cars')}}">Liste des vehicule</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
      
    
    <section class="content" >
      <div class="row">
        <div class="col-12">
          <div class="card">
       <section id="car-list-area" class="section-padding" style="margin-top: 0px;padding: 0px 0px ">
        <div class="container">
            <div class="row">
       
                <div class="col-lg-12">
                    <div class="car-details-content">
                        <h1 class="uppercase">{{$car->cars}}</h1>
                        <div class="car-preview-crousel">
                            <div class="single-car-preview">
                                <img src="{{asset('/images/'.$car->image1)}}" alt="{{$car->marque}}" width="350" height="300">
                                <img src="{{asset('/images/'.$car->image2)}}" alt="{{$car->marque}}" width="350" height="300">
                                <img src="{{asset('/images/'.$car->image3)}}" alt="{{$car->marque}}" width="350" height="300">
                            </div>
                        </div>
      <div class="tab-content bg-transparent" style="margin-top: 20px">
        <div id="note-full-container" class="note-has-grid">
            <div class=" single-note-item all-category" style="">
                <div class="card card-body">
                    <span class="side-stick"></span>
                    <h5 class="note-title text-truncate w-75 mb-0" >PLUS D'INFORMATIONS</h5>
                     <div class="sidebar-body">
                        <p>{{$car->description}}</p>
                      </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="car-details-info">
        <h4></h4>
         <div class="technical-info">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tech-info-table">
                                            <table class="table table-bordered table-hover">
                                                <tr>
                                                    <th>ENERGIE</th>
                                                    <td>{{$car->energie}}</td>
                                                    <th>ABS</th>
                                                    <td>{{ $car->abs==1? 'oui' : 'non' }}</td>
                                                </tr>
                                                <tr>
                                                    <th>CLIMATISTION</th>
                                                    <td>{{ $car->climatisation==1? 'oui' : 'non' }}</td>
                                                    <th>GPS</th>
                                                    <td>{{ $car->gps==1? 'oui' : 'non' }}</td>
                                                </tr>
                                                <tr>
                                                    <th>NOMBRE DE PORTS</th>
                                                    <td>{{$car->number_port}}</td>
                                                    <th>COULEUR</th>
                                                    <td>{{$car->couleur}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ETAT</th>
                                                    <td>{{$car->etat}}</td>
                                                    <th>MATRICULE</th>
                                                    <td>{{$car->matricule}}</td>
                                                </tr>
                                                <tr>
                                                    <th>KILOMETRAGE</th>
                                                    <td>{{$car->kilometrage}}</td>
                                                </tr>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
           
        </div>
        </div>
    </div>
            </div>
        </div>
    </section>
  </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection