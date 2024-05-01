<?php 

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller{


	public function index(){
		$nombres = User::get();
		return view('signup',['nombres'=>$nombres]);
	}

	public function create(){
		return view('signup');
	}

	public function store(Request $request){

		$request->validate([
			'name' => ['required'],
			'last_name' => ['required'],
			'password' => ['required'],
			'phone_number' => ['required'],
			'email' => ['required','unique:users'],
			'sexo' => ['required'],
			'datebirth' => ['required'],
		]);


		User::create([
			'name' => $request->name,
			'last_name' => $request->last_name,
			'password' => bcrypt($request->password),
			'phone_number' => $request->phone_number,
			'email' => $request->email,
			'sex' => $request->sexo,
			'datebirth' => $request->datebirth,
			'role' => $request->boolean('is_admin')
 
		]);

		return to_route('registration_success');
	}

	public function login(Request $request){

		$credentials = $request->validate([
			'email' => ['required','string','email'],
			'password' => ['required']
		]);

		if (!Auth::attempt($credentials, false)){
			throw validationException::withMessage([
				'password' => __('auth.failed')
			]);
		}

		$request->session()->regenerate();
		$is_admin = DB::table('users')->where('email', $request->email)->value('role');
		if ($is_admin) {		
			return redirect()->intended('admin');
		}

		return redirect()->intended('common');

	}
}