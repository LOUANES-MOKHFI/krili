<style type="text/css">
  

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}


button{
	width: 200px;
}
span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  left: 0;
  top: 0;
  right: 6
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */

@media screen and (max-width: 300px) {

  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

.center {
  margin: auto;
  width: 60%;
  padding: 10px;
}
@media (max-width: 768px) {
  .center {

  width: 110%;
}
}

</style>

<div id="louer_v" class="modal text-center">
  <div class="center col-md-8 col-sx-12" style="width: 70%">
   <form method="POST" action="{{ url('/vehicule/louer') }}" class="modal-content animate" enctype="multipart/form-data">
                        @csrf
    <div class="imgcontainer">
      <span onclick="document.getElementById('louer_v').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <p style="height: 10px"></p>
      <div class="">
    		<img src="{{asset('/images/'.$car->image1)}}" style="height: 280px;width: 540px" class="cirle">
    	</div>
    <div class="row">
    	<input type="hidden" name="type_location" value="LOCATION DES VEHICULES">
      <input type="hidden" name="id_vehicule" value="{{$car->id}}">
      <input type="hidden" name="id_agence" value="{{$car->id_agence}}">
                    <div class="col-md-3 form-group">
                      <label for="first_name">NOM</label>
                      <input id="first_name" type="text" class="form-control form-control-lg @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                          @error('first_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>

                    <div class="col-md-3 form-group">
                      <label for="last_name">PRENOM</label>
                      <input id="last_name" type="text" class="form-control form-control-lg @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                          @error('last_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   <div class="col-md-6 form-group">
                      <label for="email">EMAIL</label>
                      <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="num_tlfn">NUMERO TELEPHONE</label>
                      <input id="num_tlfn" type="num_tlfn" class="form-control form-control-lg @error('num_tlfn') is-invalid @enderror" name="num_tlfn" value="{{ old('num_tlfn') }}" required autocomplete="num_tlfn" autofocus minlength="9" maxlength="10" >

                          @error('num_tlfn')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="date_res"> DATE DE RESERVATION </label>
                        <input id="date_res" type="date" class="form-control form-control-lg @error('date_res') is-invalid @enderror" name="date_res" required autocomplete="new-couleur"  value="{{ old('date_res') }}">

                                @error('date_res')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="date_fin_res"> DATE FIN DE RESERVATION </label>
                        <input id="date_fin_res" type="date" class="form-control form-control-lg @error('date_fin_res') is-invalid @enderror" name="date_fin_res" required autocomplete="new-couleur"  value="{{ old('date_fin_res') }}">

                                @error('date_fin_res')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                     <div class="col-md-6 form-group">
                      <label for="num_permis">NUMERO DE VOTRE PERMIS</label>
                        <input id="num_permis" type="text" class="form-control form-control-lg @error('num_permis') is-invalid @enderror" name="num_permis" required autocomplete="new-couleur"  value="{{ old('num_permis') }}">

                                @error('num_permis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                    </div>
                      
                    <div class="col-md-6 form-group">
                      <label for="permis">PHOTO DE VOTE PERMIS</label>
                      <input id="permis" type="file" class="form-control form-control-lg @error('permis') is-invalid @enderror" name="permis" required autofocus>
                      <span style="color: green">une claire photo de votre permis</span>
                          @error('permis')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                    </div>
                   
                    
                  </div>  
      <button type="submit" class="btn btn-success btn-lg px-5 button-primary button-large text-center">
                                    {{ __('CONFIRMER') }}
      </button>
      <a type="submit" class="btn btn-danger btn-lg px-5 button-primary button-large text-center" onclick="document.getElementById('louer_v').style.display='none'">
                                    {{ __('ANNULER') }}
      </a>
    </div>
  </form>

  </div>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>