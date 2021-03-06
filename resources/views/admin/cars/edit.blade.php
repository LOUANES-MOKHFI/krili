@extends('admin.layouts.app')
@section('title')
      Vehicules
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MODIFIER UNE VEHICULE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/cars')}}">Liste des Vehicules</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

    </div>
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
             <div class="card-header row">
              <h3 class="card-title col-md-12">MODIFIER LA VEHICULE <span style="color: red">{{$car->car}}</span></h3>
             </div>
             {!!Form::open(['url' => 'admin/cars/'.$car->id ,'method' => 'put','enctype'=>'multipart/form-data'])!!}
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="cars">NOM DE VEHICULE</label>
                      <input id="cars" type="text" class="form-control form-control-lg @error('cars') is-invalid @enderror" name="cars" value="{{ $car->cars }}" required autocomplete="cars" autofocus>

                          @error('cars')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="col-md-3 form-group">
                      <label for="marque">MARQUE</label>
                      <select name="marque" class="form-control-lg form-control @error('marque') is-invalid @enderror">
                        <option value="{{$car->marque}}">{{$car->marque}}</option>
                        <option value="PEUGUEOT">PEUGUEOT</option>
                        <option value="RENAULT">RENAULT</option>
                        <option value="HYUNDAI">HYUNDAI</option>
                        <option value="AUDI">AUDI</option>
                        <option value="BMW">BMW</option>
                        <option value="MERCEDES">MERCEDES</option>
                      </select>
                      @error('marque')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                   <div class="col-md-3 form-group">
                      <label for="energie">ENERGIE</label>
                      <select name="energie" class="form-control-lg form-control @error('energie') is-invalid @enderror">
                        <option value="{{$car->energie}}">{{$car->energie}}</option>
                        <option value="ESSENCE">ESSENCE</option>
                        <option value="SANS PLAMBE">SANS PLAMBE</option>
                        <option value="GAZOILE">GAZOILE</option>
                        <option value="GAZ">GAZ</option>
                      </select>
                      @error('energie')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="number_port">NOMBRE DES PORTS</label>
                      <select name="number_port" class="form-control-lg form-control @error('number_port') is-invalid @enderror">
                        <option value="{{$car->number_port}}">{{$car->number_port}}</option>
                        <option value="2">2</option>
                        <option value="4">4</option>
                      </select>
                      @error('number_port')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="couleur"> COULEUR </label>
                                <input id="couleur" type="text" class="form-control form-control-lg @error('couleur') is-invalid @enderror" name="couleur" required autocomplete="new-couleur" value="{{$car->couleur}}">

                                @error('couleur')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                      <div class="col-md-3 form-group">
                      <label for="kilometrage">KILOMETRAGE</label>
                       <input id="kilometrage" type="number" class="form-control form-control-lg @error('kilometrage') is-invalid @enderror" name="kilometrage" required autocomplete="kilometrage" value="{{$car->kilometrage}}">
                      @error('kilometrage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                   <div class="col-md-3 form-group">
                      <label for="abs">ABS</label>
                      <select name="abs" class="form-control-lg form-control @error('abs') is-invalid @enderror">
                        <option value="{{$car->abs}}">{{$car->abs}}</option>
                        <option value="1">OUI</option>
                        <option value="0">NON</option>
                      </select>
                      @error('abs')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-3 form-group">
                      <label for="gps">GPS</label>
                      <select name="gps" class="form-control-lg form-control @error('gps') is-invalid @enderror">
                        <option value="{{$car->gps}}">{{$car->gps}}</option>
                        <option value="1">OUI</option>
                        <option value="0">NON</option>
                      </select>
                      @error('gps')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                     <div class="col-md-3 form-group">
                      <label for="climatisation">CLIMATISATION</label>
                      <select name="climatisation" class="form-control-lg form-control @error('climatisation') is-invalid @enderror">
                        <option value="{{$car->climatisation}}">{{$car->climatisation}}</option>
                        <option value="1">OUI</option>
                        <option value="0">NON</option>
                      </select>
                      @error('climatisation')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="etat">ETAT</label>
                      <select name="etat" class="form-control-lg form-control @error('etat') is-invalid @enderror">
                        <option value="{{$car->etat}}">{{$car->etat}}</option>
                        <option value="NORMAL">NORMAL</option>
                        <option value="BIEN">BIEN</option>
                        <option value="TRES BIEN">TRES BIEN</option>
                      </select>
                      @error('etat')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="matricule">MATRICULE</label>
                      <input id="matricule" type="text" class="form-control form-control-lg @error('matricule') is-invalid @enderror" name="matricule" value="{{$car->matricule}}" required autocomplete="matricule" autofocus>

                      @error('matricule')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                     <div class="col-md-4 form-group">
                      <label for="prix">PRIX PAR JOUR</label>

                      <input id="prix" type="text" class="form-control form-control-lg @error('prix') is-invalid @enderror" name="prix" value="{{$car->prix}} " required autocomplete="prix" autofocus>

                      @error('prix')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>

                    <div class="col-md-4 form-group">
                      <label for="image1">IMAGE 1</label>
                       <img src="{{asset('/images/'.$car->image1)}}" width="150" height="150">
                      <input id="image1" type="file" class="form-control form-control-lg @error('image1') is-invalid @enderror" name="image1" autofocus>

                          @error('image1')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="image2">IMAGE 2</label>
                       <img src="{{asset('/images/'.$car->image2)}}" width="150" height="150">
                      <input id="image2" type="file" class="form-control form-control-lg @error('image2') is-invalid @enderror" name="image2" autofocus>

                          @error('image2')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="image3">IMAGE 3</label>
                      <img src="{{asset('/images/'.$car->image3)}}" width="150" height="150">
                      <input id="image3" type="file" class="form-control form-control-lg @error('image3') is-invalid @enderror" name="image3" autofocus>
                          @error('image3')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION DE VEHICULE</label>
                      
                      <textarea id="description" type="file" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autofocus>{{$car->description}}</textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   
                    
                  </div>
                   <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('MODIFIER') }}
                                </button>
                        </div>
                    </div>
           {!!Form::close()!!}
            <!-- /.card-header -->
            <div class="card-body">
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('footer')

@endsection