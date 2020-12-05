<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Se connecter</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {!! Html::style('/designe/assets/css/bootstrap.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/vegas.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/slicknav.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/magnific-popup.css')!!}
    {!! Html::style('/designe/assets/css/plugins/owl.carousel.min.css')!!}
    {!! Html::style('/designe/assets/css/plugins/gijgo.css')!!}
    {!! Html::style('/designe/assets/css/font-awesome.css')!!}
    {!! Html::style('/designe/assets/css/reset.css')!!}
    {!! Html::style('/designe/assets/css/style.css')!!}
    {!! Html::style('/designe/assets/css/responsive.css')!!}
    <!-- Styles -->
<style type="text/css">
    .a{
        margin-top: 200px;
    }
</style>
</head> 
<body>
<div class="container a">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>