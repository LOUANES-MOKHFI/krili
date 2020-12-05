<?php 
function getsetting(){
     return \App\SiteSetting::where('id', 1)->first();
}
function Reservation($id){
    return \App\Reservation::where('id_agence',$id)->where('fin_reservation',0)->get();
  }
  function reserver($id){
 return \App\Reservation::where('id_vehicule',$id)->where('fin_reservation',0)->first();
   }
  
  function fin_reservation($id){
        return \App\Reservation::where('id_vehicule',$id)->where('fin_reservation',0)->first();

  }
  function reserver_appartement($id){
    return \App\Reservation::where('id_appartement',$id)->where('fin_reservation',0)->first();
  }
  function fin_reservation_appartement($id){
        return \App\Reservation::where('id_appartement',$id)->where('fin_reservation',0)->first();
}

  function Client($id){
    return \App\Client::where('id',$id)->first();
  }
function Demande(){
    return \App\User::where('confirmation_admin' , 0)->where('deleted',0)->get();
  }
function unreadMessage(){
    return \App\Contact::where('view' , 0)->where('deleted',0)->get();
  }

  function countunreadMessage(){
    return \App\Contact::where('view' , 0)->where('deleted',0)->count();
  }
    function countreadMessage(){
    return \App\Contact::where('view' , 1)->where('deleted',0)->count();
  }
     function deleted_message(){
    return \App\Contact::where('view' , 1)->where('deleted',1)->get();
  }
   function allmessage(){
     return \App\Contact::where('deleted',0)->get();
   }
function Wilaya(){
  return App\Agence::select('wilaya')->distinct()->where('deleted',0)->orderBy('wilaya')->get();
}
function Wilaya_v(){
  return App\Agence::select('wilaya')->distinct()->where('deleted',0)->where('type_agence','LOCATION DES VEHICULES')->orderBy('wilaya')->get();
}
function Wilaya_a(){
  return App\Agence::select('wilaya')->distinct()->where('deleted',0)->where('type_agence','LOCATION DES APPARTEMENTS')->orderBy('wilaya')->get();
}
function All_wilaya(){
  return App\Wilaya::where('deleted',0)->get();
}

function Agence(){
  return App\Agence::where('deleted',0)->get();
}

function cars(){
  return App\Cars::select('marque')->distinct()->where('deleted',0)->get();
}
function count_cars(){
  return App\Cars::where('deleted',0)->count();
}
function Appartements(){
  return App\Appartements::select('type_appartement')->distinct()->where('deleted',0)->get();
}
function count_Appartements(){
  return App\Appartements::where('deleted',0)->count();
}
function last_Agence(){
  return App\User::where('deleted',0)->where('id','!=',1)->where('confirmation_admin',1)->orderBy('id','desc')->limit(4)->get();
}
function last_Cars(){
  return App\Cars::where('deleted',0)->limit(4)->get();
}
function last_Appartements(){
  return App\Appartements::where('deleted',0)->limit(4)->get();
}
function Cars_agence($id){
  return App\Cars::where('deleted',0)->where('id_agence',$id)->limit(4)->get();
}
function Appartement_agence($id){
  return App\Appartements::where('deleted',0)->where('id_agence',$id)->limit(4)->get();
}

function Marque(){
  return App\Cars::select('marque')->distinct()->where('deleted',0)->get();
}
function Type_appartement(){
  return App\Appartements::select('type_appartement')->distinct()->where('deleted',0)->get();
}
function Wilaya_appartement(){
  return App\Appartements::select('wilaya')->distinct()->where('deleted',0)->get();
}

?>