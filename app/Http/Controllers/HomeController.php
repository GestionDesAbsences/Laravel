<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }



    public function login()
    {
        return view('login');
    }


    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

    public function submitLogin(Request $request) {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = User::where('email', '=', $credentials['email'])->firstOrFail();
            $role = $user->role;
            switch ($role) {
                case "prof": return redirect()->route('prof.account');
                case "etudiant": return redirect()->route('etudiant.account');
            }
            return redirect()->route('home');
        }
        else {
            return redirect()->route('login');
        }
    }
}
