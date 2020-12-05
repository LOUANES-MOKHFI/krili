@extends('admin.layouts.app')
@section('title')
      Appartements
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">AJOUTER UNE APPARTEMENT</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/appartements')}}">Liste des Appartements</a></li>
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
              <h3 class="card-title col-md-12">AJOUTER UNE APPARTEMENT</h3>
             </div>
           {!!Form::open(['url' => '/admin/appartements' ,'method' => 'post','enctype'=>'multipart/form-data'])!!}
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="wilaya">WILAYA</label>
                      <select name="wilaya" class="form-control-lg form-control @error('wilaya') is-invalid @enderror">
                        <option value="">-- WILAYA --</option>
                        @foreach(Wilaya() as $wilaya)
                        <option value="{{ $wilaya->wilaya}}">{{ $wilaya->wilaya}}</option>
                        @endforeach
                      </select>
                          @error('wilaya')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="ville">VILLE</label>
                      <input id="ville" type="text" class="form-control form-control-lg @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>

                      @error('ville')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                     </div>
                     <div class="col-md-4 form-group">
                      <label for="rue">RUE</label>
                      <input id="rue" type="text" class="form-control form-control-lg @error('rue') is-invalid @enderror" name="rue" value="{{ old('rue') }}" required autocomplete="rue" autofocus>

                      @error('rue')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                     </div>

                     <div class="col-md-4 form-group">
                      <label for="type_appartement">TYPE D'APPARTEMENT</label>
                      <select name="type_appartement" class="form-control-lg form-control @error('type_appartement') is-invalid @enderror">
                        <option value="">-- TYPE D'APPARTEMENT --</option>
                      
                        <option value="villa">VILLA</option>
                        <option value="appartement">APPARTEMENT</option>
                      
                      </select>
                          @error('type_appartement')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-4 form-group">
                      <label for="number_room">NOMBRE DES CHAMBRES</label>
                     <input id="number_room" type="text" class="form-control form-control-lg @error('number_room') is-invalid @enderror" name="number_room" value="{{ old('number_room') }}" autocomplete="number_room" autofocus>
                      @error('number_room')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="etage">ETAGE</label>
                     <input id="etage" type="text" class="form-control form-control-lg @error('etage') is-invalid @enderror" name="etage" value="{{ old('etage') }}" autocomplete="etage" autofocus>
                      @error('etage')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="prix">PRIX PAR JOUR</label>
                      <input id="prix" type="text" class="form-control form-control-lg @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" autocomplete="prix" autofocus>

                      @error('prix')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                     <div class="col-md-4 form-group">
                      <label for="etat">ETAT</label>
                      <input id="etat" type="text" class="form-control form-control-lg @error('etat') is-invalid @enderror" name="etat" value="{{ old('etat') }}" autocomplete="etat" autofocus>

                      @error('etat')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div> <div class="col-md-4 form-group">
                      <label for="description">DESCRIPTION</label>
                      <textarea id="description" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autocomplete="description" autofocus>{{ old('description') }}</textarea>

                      @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="image1">IMAGE 1</label>
                      <input id="image1" type="file" class="form-control form-control-lg @error('image1') is-invalid @enderror" name="image1" required autofocus>

                          @error('image1')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="image2">IMAGE 2</label>
                      <input id="image2" type="file" class="form-control form-control-lg @error('image2') is-invalid @enderror" name="image2" required autofocus>

                          @error('image2')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="image3">IMAGE 3</label>
                      <input id="image3" type="file" class="form-control form-control-lg @error('image3') is-invalid @enderror" name="image3" required autofocus>
                          @error('image3')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                  </div>
                   <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('AJOUTER') }}
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