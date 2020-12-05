@extends('layouts.app')
@section('title')
   Contactez Nous
@endsection
@section('header')
<style type="text/css">
    #header-area .mainmenu ul li.active a{
    color: #ffd000;
}
</style>
@endsection
@section('content')

  <section id="page-title-area" class="section-padding overlay" style="height: 200px">
        <div class="container">
            <div class="row">
                <!-- Page Title Start -->
                <div class="col-lg-12">
                    <div class="section-title  text-center">
                        <h2>Contactez Nous</h2>
                        <span class="title-line"><i class="fa fa-car"></i></span>
                        <p></p>
                    </div>
                </div>
                <!-- Page Title End -->
            </div>
        </div>
    </section>
    <!--== Page Title Area End ==-->

    <!--== Contact Page Area Start ==-->
    <div class="contact-page-wrao section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="contact-form">
                         {!! Form::open(['url'=>'/contact', 'method'=>'POST'])!!}
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="name-input">
                                        <input type="text" placeholder="Nom et prénom" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                                         @error('name')
                                        
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="email-input">
                                        <input type="email" placeholder="Email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('name')}}">
                                         @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="subject-input">
                                        <input type="text" placeholder="Objet" name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{old('subject')}}">
                                         @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="message-input">
                                <textarea name="message" cols="30" rows="10" placeholder="Message" class="form-control @error('message') is-invalid @enderror" value="{{old('message')}}"></textarea>
                                 @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-submit">
                                <button type="submit">Envoyer le message</button>
                            </div>
                         {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Contact Page Area End ==-->

    <!--== Map Area Start ==-->
    <div class="maparea">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29213.038296132225!2d90.39150904197642!3d23.760577791538438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c783c3404f0d%3A0x76ae0d2edabc81df!2sHatir+Jheel!5e0!3m2!1sen!2sbd!4v1517941663187"></iframe>
    </div>
@endsection
@section('footer')

@endsection
       
