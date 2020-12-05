<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
 public function register(Request $request)
    { 
        
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
   
     

        //$user->notify(new RegistedUser());
      
         return $this->registered($request, $user)
                        ?: redirect('/login')->with('success',"Votre compte a bien étè crée,une email de confirmation envoyer lors de la confirmation de votre demande");
     
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'wilaya'      => 'required|min:3|max:255',
            'ville'       => 'required|min:3|max:255',
            'type_agence' => 'required|min:3|max:255',
            'num_tlfn'    => 'required|min:9|max:14',
            'num_reg'     => 'required|min:3|max:255',
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'wilaya' => $data['wilaya'],
            'ville' => $data['ville'],
            'type_agence' => $data['type_agence'],
            'num_tlfn' => $data['num_tlfn'],
            'name' => $data['name'],
            'num_reg' => $data['num_reg'],

        
        ]);
    }
}
