<!DOCTYPE html>
<html>
<head>
    <title>Email de verification</title>
        <link rel="shortcut icon" href="/designe/favicon.ico" type="image/x-icon" />

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  {!!Html::style('/designe/plugins/fontawesome-free/css/all.min.css')!!}
  {!!Html::style('/designe/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')!!}
  {!!Html::style('/designe/plugins/icheck-bootstrap/icheck-bootstrap.min.css')!!}
  {!!Html::style('/designe/plugins/jqvmap/jqvmap.min.css')!!}
  {!!Html::style('/designe/dist/css/adminlte.min.css')!!}
  {!!Html::style('/designe/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}
  {!!Html::style('/designe/plugins/daterangepicker/daterangepicker.css')!!}
  {!!Html::style('/designe/plugins/summernote/summernote-bs4.css')!!}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
<div class="container" style="margin-top: 200px">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Verifie votre adress email') }}</h3></div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif
                     <p style="font-size: 20px">
                    {{ __('Avant de continuer, veuillez vérifier votre e-mail pour un lien de vérification.') }}
                    {{ __('Si vous n\'avez pas reçu l\'e-mail') }}</p> <a style="font-size: 20px" href="{{ route('verification.resend') }}">{{ __('cliquez ici pour en demander un autre') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>