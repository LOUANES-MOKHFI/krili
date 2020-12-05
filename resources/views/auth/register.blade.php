@extends('layouts.app')
@section('title')
 s'inscrire
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
                        <h2>S'inscrire</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>

 <section id="lgoin-page-wrap" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-8 m-auto">
                    <div class="login-page-content">
                        <div class="login-form">
                            <h3>s'inscrire</h3>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                                 <div class="username">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="NOM DE L'AGENCE">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="username">
                                   <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="username">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="MOT DE PASSE">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="password">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="CONFIRMER VOTRE MOT DE PASSE">
                                </div>
                                
                                <div class="username">
                                    <select class="form-control @error('wilaya') is-invalid @enderror" name="wilaya" required>
                                        <option value="">-- WILAYA --</option>
                                        @foreach(All_wilaya() as $wilaya)
                                            <option value="{{$wilaya->wilaya}}">{{$wilaya->wilaya}}</option>
                                        @endforeach
                                    </select>
                                @error('wilaya')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="username">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus placeholder="VILLE">

                                @error('ville')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="username">
                                    <select class="form-control @error('type_agence') is-invalid @enderror" name="type_agence" required>
                                        <option value="">-- TYPE D'AGENCE --</option>
                                        <option value="LOCATION DES VEHICULES">LOCATION DES VEHICULES</option>
                                        <option value="LOCATION DES APPARTEMENTS">LOCATION DES APPARTEMENTS</option>
                                     
                                    </select>
                                @error('type_agence')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                 <div class="username">
                                    <input id="num_tlfn" type="text" class="form-control @error('num_tlfn') is-invalid @enderror" name="num_tlfn" value="{{ old('num_tlfn') }}" required autocomplete="num_tlfn" autofocus placeholder="NUMERO DE TELEPHONE ">

                                @error('num_tlfn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                                 <div class="username">
                                    <input id="num_reg" type="text" class="form-control @error('num_reg') is-invalid @enderror" name="num_reg" value="{{ old('num_reg') }}" required autocomplete="num_reg" autofocus placeholder="NUMERO DE REGISTRE COMMERCE ">

                                @error('num_reg')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                               
                                <div class="log-btn">
                                     <button type="submit" class="btn btn-primary">
                                    {{ __('S\'INSCRIRE') }}
                                </button>
                                </div>
                                 </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')

@endsection


