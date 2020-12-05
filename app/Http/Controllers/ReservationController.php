<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Client;
use App\Appartements;
use App\Reservation;
use App\Http\Requests\AppartementsRequest;
use App\Http\Requests\CarsRequest;
use App\Http\Requests\ClientRequest;
use App\Http\Requests\ReservationRequest;
use Illuminate\Support\Facades\Auth;
use carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
   public function reserver(ClientRequest $request_client ,Client $client,ReservationRequest $request,Reservation $reserver){
    
    $client->first_name = $request_client->input('first_name');
    $client->last_name = $request_client->input('last_name');
    $client->email = $request_client->input('email');
    $client->num_tlfn = $request_client->input('num_tlfn');
    $client->id_agence = $request_client->input('id_agence');

if($request->type_location == 'LOCATION DES VEHICULES')
	{
    $client->num_permis = $request_client->input('num_permis');
    if($request->hasFile('permis'))
       {
        $client->permis = $request_client->file('permis');
        $new_name = rand(). '.' . $client->permis->getClientOriginalExtension();
        $client->permis->move('permis/',$new_name);
        $client->permis = $new_name;
        }
	}
	elseif ($request->type_location == 'LOCATION DES APPARTEMENTS')
	{
		  if($request->hasFile('carte_identitie'))
       {
        $client->carte_identitie = $request_client->file('carte_identitie');
        $new_name = rand(). '.' . $client->carte_identitie->getClientOriginalExtension();
        $client->carte_identitie->move('carte_identitie/',$new_name);
        $client->carte_identitie = $new_name;
        }
    $client->num_carte_identitie = $request_client->input('num_carte_identitie');

	}	
  $client->save();

     $id_client = $client->id;

   	if($request->type_location == 'LOCATION DES VEHICULES'){
        $reserver->create([
        	'type_resevation' 	   => $request->type_location,
        	'date_reservation'     => $request->date_res,
        	'date_fin_reservation' => $request->date_fin_res,
        	'id_vehicule' 		   => $request->id_vehicule,
        	'id_client' 		   => $id_client,
        	'id_agence' 		   => $request->id_agence,

        ]);

   	}elseif ($request->type_location == 'LOCATION DES APPARTEMENTS') {
   		$reserver->create([
        	'type_resevation' 		=> $request->type_location,
        	'date_reservation' 		=> $request->date_res,
        	'date_fin_reservation'  => $request->date_fin_res,
        	'id_appartement' 		=> $request->id_appartement,
			'id_client' 			=> $id_client,
			'id_agence' 		   => $request->id_agence,
        ]);
   	}

    // Lancement du téléchargement du fichier PDF
  //  $pdf = $pdf->download(\Str::slug($reserver->id).".pdf");

 	     // return view('user.show_car',compact('reserver','pdf'));

session()->flash('success',"Votre Reservation a étè faite avec succées, Vous recevez un devis lors de l'acceptation de votre reservation");
     return redirect()->back();

   }

   public function all_reservation(){
    $type_agence = Auth::user()->type_agence;
    $id_agence = Auth::user()->id;

    $reservations = Reservation::where('id_agence',$id_agence)->where('type_resevation',$type_agence)->orderBy('id','desc')->where('fin_reservation',0)->paginate(15);
    if($reservations === null){
      return view('admin.layouts.error_404');
    }else{
      return view('admin.reservation.index',compact('reservations','type_agence'));
    }
   }

    public function show_reservation($id){
     $type_agence = Auth::user()->type_agence;
    $id_agence = Auth::user()->id;

    $reservation = Reservation::where('id',$id)->where('id_agence',$id_agence)->where('type_resevation',$type_agence)->first();
  
    if($reservation === null){
      return view('admin.layouts.error_404');
    }else{
      $date_reservation = $reservation->date_reservation;
      $date_fin_reservation = $reservation->date_fin_reservation;
     //dd(now(),$date_reservation,now()->diffInDays($date_fin_reservation));
      $client = Client::where('id',$reservation->id_client)->first();
      return view('admin.reservation.show',compact('reservation','client'));
    }
   }

   public function effectuer($id){
    $reservation = Reservation::find($id);
    

           $client = Client::where('id',$reservation->id_client)->first();
          
            $to_name = $client->last_name;
            $to_email = $client->email;
            $data = array('name'=>$to_name, "body" => "Votre Reservation a étè faite avec succees, si vous depassez le delai de reservation, votre reservation doit annuler automatiquement");
 
   
// $pdf = PDF::loadView('emails.mail', $data)->setPaper('a4'); 
  //  $pdf = $pdf->download(\Str::slug($reserver->id).".pdf");

Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('RESERVATION KRILI');
//$message->attachData($pdf->output(),'user.pdf');
$message->from('louanes.mokhfi@gmail.com','reservation KRILI');
});
    
        $email=$client->email;

        $last_name=$client->last_name;
        $first_name=$client->first_name;
        $num_tlfn=$client->num_tlfn;
        $num_reservation=$reservation->id;
        $date_reservation=$reservation->date_reservation;
        $date_fin_reservation=$reservation->date_fin_reservation;
        if($reservation->id_vehicule != 0)
            {
  $vehicule = Cars::find($reservation->id_vehicule);
              $cars = $vehicule->cars;
              $marque = $vehicule->marque;
              $prix = $vehicule->prix;
            }
            else
            {
             
              $appartement = Appartements::find($reservation->id_appartement);
               
              $type_appartement = $appartement->type_appartement;
              $ville = $appartement->ville;
              $prix = $appartement->prix; 
            }
             if($reservation->id_vehicule != 0)
            {
            $data = array('first_name'=>$first_name,'last_name'=>$last_name, 'email'=>$email,'num_tlfn'=>$num_tlfn,'num_reservation'=>$num_reservation,'date_reservation'=>$date_reservation,'date_fin_reservation'=>$date_fin_reservation,'num_reservation'=>$num_reservation,'cars'=>$cars,'marque'=>$marque,'prix'=>$prix);
            }
            else
            {
              $data = array('first_name'=>$first_name,'last_name'=>$last_name, 'email'=>$email,'num_tlfn'=>$num_tlfn,'num_reservation'=>$num_reservation,'date_reservation'=>$date_reservation,'date_fin_reservation'=>$date_fin_reservation,'num_reservation'=>$num_reservation,'type_appartement'=>$type_appartement,'ville'=>$ville,'prix'=>$prix);
            }
 //       $data["subject"]=$request->get("subject");

        $pdf = PDF::loadView('user.pdf', $data);

       // dd($email);
            Mail::send('user.pdf', $data, function($message)use($email,$last_name,$pdf) {
            $message->to($email, $last_name)
            ->subject('devis de votre location')
            ->attachData($pdf->output(), "devis.pdf");
            $message->from('louanes.mokhfi@gmail.com','reservation KRILI');
            });
        
$reservation->fin_reservation = 1;
    $reservation->save();
    Session()->flash('success','la reservation est éffectuer');
    return redirect('/admin/reservation');
   
}
}
