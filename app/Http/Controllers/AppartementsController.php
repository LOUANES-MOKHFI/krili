<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appartements;
use App\Agence;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\AppartementsRequest;
class AppartementsController extends Controller
{
    public function index(){
        $id_agence = Auth::user()->id;
    	$appartements = Appartements::where('deleted',0)->where('id_agence',$id_agence)->orderBy('type_appartement')->paginate(15);
    	return view('admin.appartements.index',compact('appartements'));
    }
    
    public function search_appartements_admin(Request $request){
    	$appartement = $request->get('appartement');
$id_agence = Auth::user()->id;
    	$appartements = Appartements::where('deleted',0)->where('id_agence',$id_agence)->where('type_appartement','Like','%'.$appartement.'%')
      ->Orwhere('wilaya','Like','%'.$appartement.'%')
      ->Orwhere('prix','Like','%'.$appartement.'%')->orderBy('type_appartement')->paginate(15)->appends('appartement',$appartement);
    	return view('admin.appartements.index',compact('appartements'));
    }
    
    public function create(){
    	
    	return view('admin.appartements.add');
    }

    public function store(AppartementsRequest $request,Appartements $appartement){
$id_agence = Auth::user()->id;
        if($request->hasFile('image1'))
       {
       $appartement->image1 = $request->file('image1');
       $new_name = rand(). '.' . $appartement->image1->getClientOriginalExtension();
        $appartement->image1->move('images/',$new_name);
		 $appartement->image1 = $new_name;
		         }
         if($request->hasFile('image2'))
       {
       $appartement->image2 = $request->file('image2');
       $new_name = rand(). '.' . $appartement->image2->getClientOriginalExtension();
        $appartement->image2->move('images/',$new_name);
        $appartement->image2 = $new_name;
        }
         if($request->hasFile('image3'))
       {
       $appartement->image3 = $request->file('image3');
       $new_name = rand(). '.' . $appartement->image3->getClientOriginalExtension();
        $appartement->image3->move('images/',$new_name);
        $appartement->image3 = $new_name;
        }

        $appartement->wilaya = $request->input('wilaya');
        $appartement->ville = $request->input('ville');
        $appartement->rue = $request->input('rue');
        $appartement->type_appartement = $request->input('type_appartement');
        $appartement->etage = $request->input('etage');
        $appartement->number_room = $request->input('number_room');
        $appartement->prix = $request->input('prix');
        $appartement->etat = $request->input('etat');
        $appartement->description = $request->input('description');
        $appartement->id_agence = $id_agence;

          $appartement->save();
          Session()->flash('l\'insertion de vehicule a étè faite avec succée');
          return redirect('admin/appartements');

    }

     public function edit($id){
       $id_agence = Auth::user()->id;
    	$appartement = Appartements::where('deleted',0)->where('id_agence',$id_agence)->where('id',$id)->first();
    	if($appartement === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.appartements.edit',compact('appartement'));
    	}
    	
    }

     public function update(AppartementsRequest $request,$id){
          
          $appartement = Appartements::where('deleted',0)->where('id',$id)->first();
          $id_agence = Auth::user()->id;
         if($request->hasFile('image1'))
       {
       $appartement->image1 = $request->file('image1');
       $new_name = rand(). '.' . $appartement->image1->getClientOriginalExtension();
        $appartement->image1->move('images/',$new_name);
		 $appartement->image1 = $new_name;
		         }
         if($request->hasFile('image2'))
       {
       $appartement->image2 = $request->file('image2');
       $new_name = rand(). '.' . $appartement->image2->getClientOriginalExtension();
        $appartement->image2->move('images/',$new_name);
        $appartement->image2 = $new_name;
        }
         if($request->hasFile('image3'))
       {
       $appartement->image3 = $request->file('image3');
       $new_name = rand(). '.' . $appartement->image3->getClientOriginalExtension();
        $appartement->image3->move('images/',$new_name);
        $appartement->image3 = $new_name;
        }

        $appartement->wilaya = $request->input('wilaya');
        $appartement->ville = $request->input('ville');
        $appartement->rue = $request->input('rue');
        $appartement->type_appartement = $request->input('type_appartement');
        $appartement->etage = $request->input('etage');
        $appartement->number_room = $request->input('number_room');
        $appartement->prix = $request->input('prix');
        $appartement->etat = $request->input('etat');
        $appartement->description = $request->input('description');
       $appartement->id_agence = $id_agence;

          $appartement->save();
          Session()->flash('la modification de vehicule a étè faite avec succée');
          return redirect('admin/appartements');

    }
   
    public function destroy($id){
           $appartement = Appartements::find($id);
           $appartement->deleted = 1;
           $appartement->save();
           Session()->flash('la Supression de vehicule a étè faite avec succée');
          return redirect('admin/appartements');
    }
    public function show($id){
       $id_agence = Auth::user()->id;
    	 $appartement = Appartements::where('id',$id)->where('deleted',0)->where('id_agence',$id_agence)->first();

            if($appartement === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.appartements.show',compact('appartement'));
    }
}
public function all_appartements(){
      $appartements = Appartements::where('deleted',0)->orderBy('type_appartement')->paginate(6);
      return view('user.all-appartements',compact('appartements'));
    }

      public function show_appartement($id,$name){
       $appartement = Appartements::where('id',$id)->where('type_appartement',$name)->where('deleted',0)->first();
            if($appartement === null){
         return view('layouts.error_404');
      }else{
          $id = $appartement->id_agence;
        $agence = Agence::find($id);
          return view('user.show_appartement',compact('appartement','agence'));
    }
}

 public function filtre_by_type($type){
      //$wilaya = $request->get('wilaya');
      $appartements = Appartements::where('deleted',0)->where('type_appartement',$type)->paginate(6)->appends('type',$type);
return view('user.all-appartements',compact('appartements'));
//return response()->json(['agences' => $agences]);
    }
     public function filtre_by_wilaya($wilaya){

      //$wilaya = $request->get('wilaya');
      $appartements = Appartements::where('deleted',0)->where('wilaya',$wilaya)->paginate(6)->appends('wilaya',$wilaya);
return view('user.all-appartements',compact('appartements'));
//return response()->json(['agences' => $agences]);
    }
}
