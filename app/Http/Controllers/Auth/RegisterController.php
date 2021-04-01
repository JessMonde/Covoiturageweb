<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom'=>['required','string','max:255'],
            'prenoms'=>['required','string','max:255'],
            'telephone' => ['required', 'number','unique:users','min:0'],
            'password' => Hash::make($data['password']),
            'role'=>['nom'],
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
        $User=DB::table('users')
        ->join('roles','users.Id_Role','=','roles.id')
        ->select('users.nom as nom','users.prenoms as prenoms',
            'users.telephone as telephone',
            'roles.nom as nom',
            'roles.id as Id_Role','users.id as id')
         ->get();
     }

    public function index()
    {
        $role=Role::all();
        return view('auth.register',compact('role'));
    }

    public function store(Request $request)
    {
        $add= new User();
        $add->nom=strtoupper($request->input('nom'));
        $add->prenoms=strtoupper($request->input('prenoms'));
        $add->password=$request->input('password');
        $add->telephone=$request->input('telephone');
        $add->remember_token=$request->input('token');
        $add->Id_Role=$request->input('Id_Role');
        
        // $add->etat=0;
        $Contact=DB::table('users')->where('telephone','=',$add->telephone)->get();
        $nom=User::where('nom','=',$add->nom)->where('prenoms','=',$add->prenoms)->get();

            if(count($Contact)>0){
                return back()->with("info","Echec. Le Numero $add->telephone est déjà attribué à un Utilisateur...");
            }else{
                if(count($nom)>0){
                    return back()->with("info","Echec. $add->nom $add->prenoms est  déjà attribué à un Utilisateur...");
                }else{
                    $add->save();
                    return redirect('/Conducteur')->with("info","Utilsateur $add->nom $add->prenoms ajouté avec Succès...");
                }
            }
        }

        public function update(Request $request, $id)
        {
            $id=decrypt($id);
            $modifier=User::find($id);
            $modifier->nom=$request->input('nom');
            $modifier->prenoms=$request->input('prenoms');
            $modifier->password=$request->input('password');
            $modifier->telephone=$request->input('telephone');
            $modifier->save();
        }
}
