<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\UserInfo;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Http\Request;

// use GuzzleHttp\Psr7\Request;

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
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/medici';

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
    
    private function checkinput()
    {
        return request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prenume' => ['required'],
            'varsta' => ['required'],
            'sex' => ['required'],
            'cnp' => 'required|digits:13',
            'telefon' => 'required|digits:10',
            'cod_pacient' => ['required']
        ]);
    }

    public function register(Request $request)
    {
        
        $data = $this->checkinput();
        $user = new User();
        $user->name=$data['name']." ".$data['prenume'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->role_id=2;
        $user->save();

        $user_info=new UserInfo();
        $user_info->user_id=$user->id;
        $user_info->nume = $data['name'];
        $user_info->prenume = $data['prenume'];
        $user_info->varsta = $data['varsta'];
        $user_info->sex = $data['sex'];
        $user_info->cnp = $data['cnp'];
        $user_info->telefon = $data['telefon'];
        $user_info->cod_pacient = $data['cod_pacient'];
        $user_info->save();
        Auth::login($user);
        return redirect('/');
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    
}
