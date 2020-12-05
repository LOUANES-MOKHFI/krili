<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cars;
use App\Appartements;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\AgenceRequest;
class AgenceController extends Controller
{

public function demande(){
    if(Auth::user()->id == 1){
      $agences = User::where('deleted',0)->where('confirmation_admin',0)->orderBy('name')->paginate(15);
      return view('admin.agence.demande',compact('agences'));
      }
      else{
            return view('admin.layouts.error_404');     
             }
    }
    public function show_demande($id){
    if(Auth::user()->id == 1){
      $agence = User::where('deleted',0)->where('confirmation_admin',0)->where('id',$id)->orderBy('name')->first();
      return view('admin.agence.show_demande',compact('agence'));
      }
      else{
            return view('admin.layouts.error_404');     
             }
    }

   public function index(){
    if(Auth::user()->id == 1){
    	$agences = User::where('deleted',0)->orderBy('name')->paginate(15);
    	return view('admin.agence.index',compact('agences'));
      }
      else{
            return view('admin.layouts.error_404');     
             }
    }
    
    public function search_agence_admin(Request $request){
    	$agence = $request->get('agence');

    	$agences = User::where('deleted',0)->where('name','Like','%'.$agence.'%')
      ->Orwhere('type_agence','Like','%'.$agence.'%')
      ->Orwhere('wilaya','Like','%'.$agence.'%')->orderBy('name')->paginate(15)->appends('agence',$agence);
    	return view('admin.agence.index',compact('agences'));
    }
    
    public function create(){
    	if(Auth::user()->id == 1){
        return view('admin.agence.add');
        }
      else{
      }
    	
    }
        public function store_profil(AgenceRequest $request,User $agence){
       
        if($request->hasFile('logo'))
       {
       $agence->logo = $request->file('logo');
      $new_name = rand(). '.' . $agence->logo->getClientOriginalExtension();
        $agence->logo->move('images/',$new_name);
        $agence->logo = $new_name;
        }

        $agence->description = $request->input('description');
        $agence->fb = $request->input('fb');
        $agence->insta = $request->input('insta');
        $agence->twitter = $request->input('twitter');

          $agence->save();
          Session()->flash('success','l\'insertion de l\'agence a étè faite avec succée');
          return redirect('profil');

    }

    public function store(AgenceRequest $request,User $agence){
        $agence->name = $request->input('name');

        if($request->hasFile('logo'))
       {
       $agence->logo = $request->file('logo');
      $new_name = rand(). '.' . $agence->logo->getClientOriginalExtension();
        $agence->logo->move('images/',$new_name);
        $agence->logo = $new_name;
        }

        $agence->wilaya = $request->input('wilaya');
        $agence->ville = $request->input('ville');
        $agence->type_agence = $request->input('type_agence');
        $agence->num_tlfn = $request->input('num_tlfn');
        $agence->email = $request->input('email');
        $agence->password = bcrypt($request->input('password'));
        $agence->num_reg = $request->input('num_reg');
        $agence->type_agence = $request->input('type_agence');
        $agence->description = $request->input('description');
        $agence->fb = $request->input('fb');
        $agence->insta = $request->input('insta');
        $agence->twitter = $request->input('twitter');
        $agence->id_user = Auth::user()->id;

          $agence->save();
          Session()->flash('success','l\'insertion de l\'agence a étè faite avec succée');
          return redirect('admin/agence');

    }

     public function edit($id){
      if(Auth::user()->id == 1){

        $agence = User::where('deleted',0)->where('id',$id)->first();
      if($agence === null){

         return view('admin.layouts.error_404');
      }else{

          return view('admin.agence.edit',compact('agence'));
      }
      }
      else{
            return view('admin.layouts.error_404');
      }
    	
    	
    }

     public function update(AgenceRequest $request,$id){
          
          $agence = User::where('deleted',0)->where('id',$id)->first();
         $agence->name = $request->input('name');
        if($request->hasFile('logo'))
       {
       $agence->logo = $request->file('logo');
      $new_name = rand(). '.' . $agence->logo->getClientOriginalExtension();
        $agence->logo->move('images/',$new_name);
        $agence->logo = $new_name;
        }

        $agence->wilaya = $request->input('wilaya');
        $agence->ville = $request->input('ville');
        $agence->type_agence = $request->input('type_agence');
        $agence->num_tlfn = $request->input('num_tlfn');
        $agence->email = $request->input('email');
        $agence->password = bcrypt($request->input('password'));
        $agence->num_reg = $request->input('num_reg');
        $agence->type_agence = $request->input('type_agence');
                $agence->description = $request->input('description');

        $agence->fb = $request->input('fb');
        $agence->insta = $request->input('insta');
        $agence->twitter = $request->input('twitter');

        $agence->id_user = Auth::user()->id;
           $agence->save();
           
          Session()->flash('success','la modification de l\'agence a étè faite avec succée');
          return redirect('admin/agence');

    }
    
    public function update_profil(Request $request,$id){
         

          $agence = User::where('deleted',0)->where('id',$id)->first();
          //dd($agence);
         // dd($agence->validator($request->all())->validate());

        
        if($request->hasFile('logo'))
       {
       $agence->logo = $request->file('logo');
      $new_name = rand(). '.' . $agence->logo->getClientOriginalExtension();
        $agence->logo->move('images/',$new_name);
        $agence->logo = $new_name;
        }
        $agence->description = $request->input('description');
        $agence->fb = $request->input('fb');
        $agence->insta = $request->input('insta');
        $agence->twitter = $request->input('twitter');
           $agence->save();
           
          Session()->flash('success','la modification de l\'agence a étè faite avec succée');
          return redirect('profil');

    }
  
    public function destroy($id){
           $agence = User::find($id);
           $agence->deleted = 1;
           $agence->save();
           Session()->flash('success','la Supression de L\'agence a étè faite avec succée');
          return redirect('admin/agence');
    }
    public function show($id){
        if(Auth::user()->id == 1)
        { 
          $agence = User::where('id',$id)->where('deleted',0)->first();
            if($agence === null)
            {
            return view('admin.layouts.error_404');
            }else
            {
          return view('admin.agence.show',compact('agence'));
            }
        }
        else
        {
         return view('admin.layouts.error_404');
        }
    	  
}
/*Vehicules*/
public function Agence_vehicules()
    {
      $agences = User::where('deleted',0)->where('confirmation_admin',1)->where('type_agence','LOCATION DES VEHICULES')->paginate(6);
        return view('user.all-agences-des-vehicules',compact('agences'));
    }

    public function show_Agence_vehicules($id,$name)
    {
      $agence = User::where('deleted',0)->where('confirmation_admin',1)->where('type_agence','LOCATION DES VEHICULES')
      ->where('id',$id)->where('name',$name)->first();
     
      if($agence === null){
           return view('layouts.error_404');
      }
     else{
       $vehicules = Cars::where('deleted',0)->where('id_agence',$agence->id)->paginate(6);
        return view('user.vehicules',compact('agence','vehicules'));
      }
    }
/*Appartement*/
    public function Agence_appartements()
    {
      $agences = User::where('deleted',0)->where('confirmation_admin',1)->where('type_agence','LOCATION DES APPARTEMENTS')->paginate(6);
        return view('user.all-agences-des-appartements',compact('agences'));
    }

    public function show_Agence_appartements($id,$name)
    {
      $agence = User::where('deleted',0)->where('confirmation_admin',1)->where('type_agence','LOCATION DES APPARTEMENTS')
      ->where('id',$id)->where('name',$name)->first();
      
      if($agence === null){
           return view('layouts.error_404');
      }
     else{
      $appartements = Appartements::where('deleted',0)->where('id_agence',$agence->id)->paginate(6);
        return view('user.appartements',compact('agence','appartements'));
      }
    }

    public function filtre_agence_vheicule_by_wilaya($wilaya){
      //$wilaya = $request->get('wilaya');
      $agences = User::where('id','!=',1)->where('confirmation_admin',1)->where('wilaya',$wilaya)->where('type_agence','LOCATION DES VEHICULES')->paginate(6)->appends('wilaya',$wilaya);
return view('user.all-agences-des-vehicules',compact('agences'));
//return response()->json(['agences' => $agences]);
    }
      public function filtre_agence_appartement_by_wilaya($wilaya){
      //$wilaya = $request->get('wilaya');
      $agences = User::where('id','!=',1)->where('confirmation_admin',1)->where('wilaya',$wilaya)->where('type_agence','LOCATION DES APPARTEMENTS')->paginate(6)->appends('wilaya',$wilaya);
return view('user.all-agences-des-vehicules',compact('agences'));
//return response()->json(['agences' => $agences]);
    }
}