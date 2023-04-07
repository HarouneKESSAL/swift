<?php

namespace App\Http\Controllers\Auth;
use App\Models\Role;
use App\Models\Unit; 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function showRegistrationForm()
     {
         $roles = ['controle de gestion', 'Direction'];
         return view('auth.register', compact('roles'));
     }
         
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
                
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
    }

    // protected function create(array $data)
    // {
    //     $role = Role::whereIn('name', ['admin','user', 'controle de gestion', 'Direction'])->first();
    //     $unité = Unit::whereIn('name', ['AIN TOUTA','EL HACHIMIA','EL KHROUB (Carbonate de Calcium)',
    //                                     'ELMA LABIOD','EL KHROUB (Granulats)','DEPOT EL KHROUB',
    //                                     'SI MUSTAPHA','DIRECTION GENERALE','DEPOT ROUIBA',
    //                                     'Direction Commercial','EL MALEH','SIDI ABDELLI','POUZZOLANE',
    //                                     'SIDI ALI BENYOUB','PIERRE ORNEMENTALES-Usine Chabat','PIERRE ORNEMENTALES-Dhaya',
    //                                     'PIERRE ORNEMENTALES-Sidi Lahcen','PIERRE ORNEMENTALES-Takbalet','DEPOT ES SENIA',
        
    //                                                                                         ])->first();

    //     $user = User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //         'role' => $data['role'],
    //         'unité' => $data['unité'],
    //     ]);
    //     $user->roles()->attach( $role->id);
    //     $user->unité()->attach( $unité->id);

    //     return $user;
    // }
}
