<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
 
class AuthController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function register()
    {
        return view('auth/register');
    }
 
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'daerah' => 'required'
        ])->validate();
 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'daerah' => $request->daerah,
            'type' => "1"
        ]);
 
        return redirect()->route('login');
    }
 
    public function login()
    {
        return view('auth/login');
    }
 
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
 
        // if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        //     throw ValidationException::withMessages([
        //         'email' => trans('auth.failed')
        //     ]);
        // }
        $user = User::where('email', $request->input('email'))->first();

        // Verifikasi password biasa
        if (!$user || $user->password !== $request->input('password')) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        // Lakukan autentikasi pengguna secara manual
        Auth::login($user, $request->boolean('remember'));
 
        $request->session()->regenerate();
 
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin/home');
        } else {
            return redirect()->route('home');
        }
         
        // return redirect()->route('admin/home');
    }
 
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
 
        $request->session()->invalidate();
 
        return redirect('/login');
    }
 
    public function profile()
    {
        return view('userprofile');
    }
}