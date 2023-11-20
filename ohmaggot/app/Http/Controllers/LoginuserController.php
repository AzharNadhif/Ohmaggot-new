<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class LoginuserController extends Controller
{
    public function show(){
        if(Auth::check()){
            return redirect('/Profile');
        }
        return view('loginuser', [
            // 'data'=>Hash::make('pengguna')
        ]);
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('Profile');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function signup(Request $request)
    {
        // $this->validate($request, [
        //     'username' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
            
        
        $username = $request->input('username');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $role = 'user';

        // $currentTimestamp = Carbon::now();

        $response = Http::post('https://asia-south1.gcp.data.mongodb-api.com/app/application-0-jiswt/endpoint/insertUser', [
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'role' => $role,
            // 'created_at' => $currentTimestamp,
            // 'updated_at' => $currentTimestamp,
        ]);


        if ($response->failed()) {
            // Handle error
            $errorMessage = $response->body();
            return $errorMessage; // Gantilah 'error' dengan nama view yang sesuai
        } else {
            // Redirect ke halaman login atau halaman lain yang sesuai
            return redirect('/loginuser');
            // Gantilah 'login' dengan nama rute yang sesuai
        }
    



        // try {
        //     DB::beginTransaction();
        
        //     $user = new User();
        //     $user->username = $username;
        //     $user->email = $email;
        //     $user->password = $password;
        //     $user->role = 'user';
        //     $user->save();

        //     DB::commit(); 
            
        //     return redirect('/loginuser');

        // }catch (Exception $e) {
        //     DB::rollback();
        //     dd($e->getMessage());
        //     return redirect('/loginuser#')->with('error', 'Maaf, terjadi kesalahan saat mendaftar. Silakan coba lagi.');
        // }

      

       
    }


    public function signout(Request $request): RedirectResponse
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/loginuser');
    }
}
