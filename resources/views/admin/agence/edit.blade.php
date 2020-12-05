@extends('admin.layouts.app')
@section('title')
      Agence
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">MODIFIER UNE AGENCE</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/agence')}}">Liste des AGENCE</a></li>
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
              <h3 class="card-title col-md-12">MODIFIER L'AGENCE <span style="color: red">{{$agence->name}}</span></h3>
             </div>
           {!!Form::open(['url' => 'admin/agence/'.$agence->id ,'method' => 'put','enctype'=>'multipart/form-data'])!!}
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="name">NOM D'AGENCE</label>
                      <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{$agence->name}}" required autocomplete="name" autofocus>

                          @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="type_agence">TYPE D'AGENCE</label>
                      <select name="type_agence" class="form-control-lg form-control @error('type_agence') is-invalid @enderror">
                        <option value="{{$agence->type_agence}}">{{$agence->type_agence}}</option>
                        <option value="LOCATION DES VEHICULES">LOCATION DES VEHICULES</option>
                        <option value="LOCATION DES APPARTEMENTS">LOCATION DES APPARTEMENTS</option>
                      </select>
                      @error('type_agence')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                      @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">EMAIL</label>
                      <input id="email" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{$agence->email }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="password"> MOT DE PASSE </label>
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="password-confirm">CONFIRMATION DE MOT DE PASSE</label>

                                <input id="password-confirm" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" >
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="wilaya">WILAYA</label>
                      <select name="wilaya" class="form-control-lg form-control @error('wilaya') is-invalid @enderror">
                        <option value="{{$agence->wilaya}}">{{$agence->wilaya}}</option>
                        @foreach(Wilaya() as $wilaya)
                          <option value="{{$wilaya->wilaya}}">{{$wilaya->wilaya}}</option>
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
                      <input id="ville" type="text" class="form-control form-control-lg @error('ville') is-invalid @enderror" name="ville" value="{{$agence->ville}}" required autocomplete="ville" autofocus>

                          @error('ville')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="num_tlfn">TELEPHONE</label>
                      <input id="num_tlfn" type="text" class="form-control form-control-lg @error('num_tlfn') is-invalid @enderror" name="num_tlfn" value="{{$agence->num_tlfn}}" required autocomplete="num_tlfn" autofocus maxlength="13" minlength="9">

                          @error('num_tlfn')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="num_reg">NUMERO DE REGISTRE COMMERCE</label>
                      <input id="num_reg" type="text" class="form-control form-control-lg @error('num_reg') is-invalid @enderror" name="num_reg" value="{{$agence->num_reg}}" required autocomplete="num_reg" autofocus>

                          @error('num_reg')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="logo">LOGO</label>
                      <img src="{{asset('/images/'.$agence->logo)}}" width="150" height="150">
                      <input id="logo" type="file" class="form-control form-control-lg @error('logo') is-invalid @enderror" name="logo" autofocus>

                          @error('logo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION DE L'AGENCE</label>
                      
                      <textarea id="description" type="file" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autofocus>{{$agence->description}}</textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                     <div class="col-md-4 form-group">
                      <label for="fb">PAGE FACEBOOK</label>
                      <input id="fb" type="text" class="form-control form-control-lg @error('fb') is-invalid @enderror" name="fb" value="{{$agence->fb }}" autocomplete="fb" autofocus>

                          @error('fb')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="twitter">PAGE TWITTER </label>
                                <input id="twitter" type="text" class="form-control form-control-lg @error('twitter') is-invalid @enderror" name="twitter" autocomplete="new-twitter" value="{{$agence->twitter }}">

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="insta">PAGE INSTAGRAMME </label>
                                <input id="insta" type="text" class="form-control form-control-lg @error('insta') is-invalid @enderror" name="insta" autocomplete="new-insta" value="{{$agence->insta }}">

                                @error('insta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                  </div>
                   <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                    {{ __('Modifier') }}
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