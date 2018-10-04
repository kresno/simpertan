<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function authenticated()
    {
      if (auth()->user()->hasRole('ROLE_ADMIN')) {
        return redirect('/admin/admin_dashboard');
      }
      elseif(auth()->user()->hasRole('ROLE_BIDANG')) {
        return redirect('/bidang/bidang_dashboard');
      }
      elseif(auth()->user()->hasRole('ROLE_PETUGAS')) {
        return redirect('/petugas/petugas_dashboard');
      }
      elseif(auth()->user()->hasRole('ROLE_KADIS')) {
        return redirect('/kadis/kadis_dashboard');
      }
      elseif(auth()->user()->hasRole('ROLE_POKTAN')) {
        return redirect('/poktan/poktan_dashboard');
      }
      else {
        return redirect('/login');
      }
    }
    // protected function credentials(Request $request)
    // {
    //     return array_merge($request->only($this->username(), 'password'));
    // }
}
