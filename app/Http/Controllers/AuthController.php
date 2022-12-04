<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Logo;
use App\Models\Branchlist;
use App\Models\Subcommetteelist;

class AuthController extends Controller
{
    public function index(){
        $logos = Logo::all();
        $branchlists = Branchlist::all();
        $subcomlists = Subcommetteelist::all();
        return view('auth.login', compact('logos', 'branchlists', 'subcomlists'));
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('dashboard.view'));
        }
        else{
          return back()->with('error','Wrong Login Details');
        }

        return redirect('loginFail')->with('error', 'Oppes! You have entered invalid credentials');
    }
   
    public function logout()
    {
      Auth::logout();

      return redirect(route('landingPage'));
    }
}
