@extends('admin.layouts.app')
@section('title')
      Profil
@endsection

@section('header')

@endsection
@section('content')
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">profil</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{url('/admin')}}">Accueil</a></li>
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
              <h3 class="card-title col-md-12">MON AGENCE</h3>
             </div>
           {!!Form::open(['url' => '/profil/'.Auth::user()->id ,'method' => 'put','enctype'=>'multipart/form-data'])!!}
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="logo">LOGO</label>

                      <input id="logo" type="file" class="form-control form-control-lg @error('logo') is-invalid @enderror" name="logo" autofocus>

                          @error('logo')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-12 form-group">
                      <label for="description">DESCRIPTION DE L'AGENCE</label>
                      
                      <textarea id="description" type="file" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" autofocus>{{Auth::user()->description}}</textarea>

                          @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="fb">PAGE FACEBOOK</label>
                      <input id="fb" type="text" class="form-control form-control-lg @error('fb') is-invalid @enderror" name="fb" value="{{Auth::user()->fb}}" autocomplete="fb" autofocus>

                          @error('fb')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="twitter">PAGE TWITTER </label>
                                <input id="twitter" type="text" class="form-control form-control-lg @error('twitter') is-invalid @enderror" name="twitter" autocomplete="new-twitter" value="{{Auth::user()->twitter}}">

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="insta">PAGE INSTAGRAMME </label>
                                <input id="insta" type="text" class="form-control form-control-lg @error('insta') is-invalid @enderror" name="insta" autocomplete="new-insta" value="{{Auth::user()->insta}}">

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
                                    {{ __('INSERER') }}
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