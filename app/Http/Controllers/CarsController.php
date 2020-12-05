<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\Agence;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\CarsRequest;
class CarsController extends Controller
{
    public function index(){
       
          $id_agence = Auth::user()->id;
        $cars = Cars::where('deleted',0)->where('id_agence',$id_agence)->orderBy('marque')->paginate(15);
      return view('admin.cars.index',compact('cars'));
        
    }
    
    public function search_cars_admin(Request $request){
    	$car = $request->get('car');
$id_agence = Auth::user()->id;
    	$cars = Cars::where('deleted',0)->where('id_agence',$id_agence)->where('cars','Like','%'.$car.'%')
      ->Orwhere('marque','Like','%'.$car.'%')
      ->Orwhere('Energie','Like','%'.$car.'%')->orderBy('cars')->paginate(15)->appends('car',$car);
    	return view('admin.cars.index',compact('cars'));
    }
    
    public function create(){
    	
    	return view('admin.cars.add');
    }

    public function store(CarsRequest $request,Cars $car){
     $id_agence = Auth::user()->id;
        $car->cars = $request->input('cars');

        if($request->hasFile('image1'))
       {
       $car->image1 = $request->file('image1');
       $new_name = rand(). '.' . $car->image1->getClientOriginalExtension();
        $car->image1->move('images/',$new_name);
        $car->image1 = $new_name;
        }
         if($request->hasFile('image2'))
       {
       $car->image2 = $request->file('image2');
       $new_name = rand(). '.' . $car->image2->getClientOriginalExtension();
        $car->image2->move('images/',$new_name);
        $car->image2 = $new_name;
        }
         if($request->hasFile('image3'))
       {
       $car->image3 = $request->file('image3');
       $new_name = rand(). '.' . $car->image3->getClientOriginalExtension();
        $car->image3->move('images/',$new_name);
        $car->image3 = $new_name;
        }

        $car->energie = $request->input('energie');
        $car->marque = $request->input('marque');
        $car->number_port = $request->input('number_port');
        $car->couleur = $request->input('couleur');
        $car->kilometrage = $request->input('kilometrage');
        $car->abs = $request->input('abs');
        $car->gps = $request->input('gps');
        $car->climatisation = $request->input('climatisation');
        $car->matricule = $request->input('matricule');
        $car->prix = $request->input('prix');
        $car->etat = $request->input('etat');
        $car->description = $request->input('description');
        $car->id_agence =  $id_agence;

          $car->save();
          Session()->flash('l\'insertion de vehicule a étè faite avec succée');
          return redirect('admin/cars');

    }

     public function edit($id){
       $id_agence = Auth::user()->id;
    	$car = Cars::where('deleted',0)->where('id',$id)->where('id_agence',$id_agence)->first();
    	if($car === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.cars.edit',compact('car'));
    	}
    	
    }

     public function update(CarsRequest $request,$id){
          
          $car = Cars::where('deleted',0)->where('id',$id)->first();
          $id_agence = Auth::user()->id;
          $car->cars = $request->input('cars');

        if($request->hasFile('image1'))
       {
       $car->image1 = $request->file('image1');
       $new_name = rand(). '.' . $car->image1->getClientOriginalExtension();
        $car->image1->move('images/',$new_name);
        $car->image1 = $new_name;
        }
         if($request->hasFile('image2'))
       {
       $car->image2 = $request->file('image2');
       $new_name = rand(). '.' . $car->image2->getClientOriginalExtension();
        $car->image2->move('images/',$new_name);
        $car->image2 = $new_name;
        }
         if($request->hasFile('image3'))
       {
       $car->image3 = $request->file('image3');
       $new_name = rand(). '.' . $car->image3->getClientOriginalExtension();
        $car->image3->move('images/',$new_name);
        $car->image3 = $new_name;
        }

        $car->energie = $request->input('energie');
        $car->marque = $request->input('marque');
        $car->number_port = $request->input('number_port');
        $car->couleur = $request->input('couleur');
        $car->kilometrage = $request->input('kilometrage');
        $car->abs = $request->input('abs');
        $car->gps = $request->input('gps');
        $car->climatisation = $request->input('climatisation');
        $car->matricule = $request->input('matricule');
        $car->prix = $request->input('prix');
        $car->etat = $request->input('etat');
        $car->description = $request->input('description');
        $car->id_agence =  $id_agence;
                  $car->save();

          Session()->flash('la modification de vehicule a étè faite avec succée');
          return redirect('admin/cars');

    }
   
    public function destroy($id){
           $car = Cars::find($id);
           $car->deleted = 1;
           $car->save();
           Session()->flash('la Supression de vehicule a étè faite avec succée');
          return redirect('admin/cars');
    }
    public function show($id){
      $id_agence = Auth::user()->id;
    	   $car = Cars::where('id',$id)->where('id_agence',$id_agence)->where('deleted',0)->first();
            if($car === null){
         return view('admin.layouts.error_404');
    	}else{
          return view('admin.cars.show',compact('car'));
    }
}

public function all_cars(){
      $vehicules = Cars::where('deleted',0)->orderBy('marque')->paginate(6);
      return view('user.all-cars',compact('vehicules'));
    }

 public function show_car($id,$name){
         $car = Cars::where('id',$id)->where('cars',$name)->where('deleted',0)->first();
            if($car === null){
         return view('layouts.error_404');
      }else{
        $id = $car->id_agence;
        $agence = Agence::find($id);
          return view('user.show_car',compact('car','agence'));
    }
  }

      public function filtre_by_marque($marque){
      //$wilaya = $request->get('wilaya');
      $vehicules = Cars::where('deleted',0)->where('marque',$marque)->paginate(6)->appends('marque',$marque);
return view('user.all-cars',compact('vehicules'));
//return response()->json(['agences' => $agences]);
    }
}
