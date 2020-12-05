<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
//use App\MAil\SenMail;
use Illuminate\Support\Facades\Mail;
class AdminController extends Controller
{
    public function index(){
   	return view('admin.index');
   }  
   public function profil(){
    return view('admin.profil');
   }  
    public function Confirmer($id){
           $agence = User::find($id);
           $agence->confirmation_admin = 1;
           $agence->admin = 1;
           $agence->save();
            $to_name = $agence->name;
            $to_email = $agence->email;
            $data = array('name'=>$to_name, "body" => "Votre inscription dans la plateform KRILI est confirmer,vous peuvez accéder à votre espace admin de location, http://localhost:8000/login");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('INSCRIPTION KRILI');
$message->from('louanes.mokhfi@gmail.com','Inscription KRILI');
});
           Session()->flash('success','la demande de L\'agence a étè Confirmer avec succée');
          return redirect('admin/demande');
    }

    public function rejeter($id){
           $agence = User::find($id);
           $agence->confirmation_admin = 0;
           $agence->deleted = 1;
           $agence->save();

           $to_name = $agence->name;
            $to_email = $agence->email;
            $data = array('name'=>$to_name, "body" => "Votre inscription dans la plateform KRILI est rejeter, vous étès obliger de refaire l'inscription avec votre propres informations, http://localhost:8000/register");
Mail::send("emails.mail", $data, function($message) use ($to_name, $to_email) {
$message->to($to_email, $to_name)
->subject('INSCRIPTION KRILI');
$message->from('louanes.mokhfi@gmail.com','Inscription KRILI');
});
           Session()->flash('success','la demande de L\'agence a étè rejeter');
          return redirect('admin/demande');
    }
}
