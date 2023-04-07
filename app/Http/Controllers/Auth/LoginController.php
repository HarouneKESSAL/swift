<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
  // protected $redirectTo = RouteServiceProvider::HOME;
    // protected function authenticated($user)
    // {
    //     if ($user->hasRole('admin')) {
    //         return redirect()->route('posts.create');
    //     } else {
    //         return redirect()->route('home');
    //     }
    // }
// In app/Http/Controllers/Auth/AuthenticatedSessionController.php

protected function authenticated()
{
    return redirect('/homeUnit');
}

protected function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login'); // add this line to redirect to a certain page
}

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
