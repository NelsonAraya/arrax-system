<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function validateLogin(Request $request)
    {
        $request->validate([
            'txtlogin' => 'required|string',
            'txtpass' => 'required|string',
        ]);
    }
    protected function attemptLogin(Request $request)
    {
        // Intenta autenticar al usuario
        $credentials = $this->credentials($request);
        $credentials['login_autorizado'] = 'S';
        return Auth::attempt(
            $credentials, $request->filled('remember')
        );
    }
    protected function credentials(Request $request)
    {
        $field = filter_var($request->input('txtlogin'), FILTER_VALIDATE_EMAIL) ? 'email' : 'id';

        return [
            $field => $request->input('txtlogin'),
            'password' => $request->input('txtpass'),
            'login_autorizado' => 'S',
        ];
    }
    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();
        return redirect()->intended($this->redirectPath());
    }
    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')->withInput()->withErrors([
            'txtlogin' => trans('auth.failed'),
        ]);
    }
    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $this->validateLogin($request);

        // Intentar autenticar al usuario
        if ($this->attemptLogin($request)) {
            // Si la autenticación es exitosa, redirige a la página deseada
            return $this->sendLoginResponse($request);
        }

        // Si la autenticación falla, redirige de vuelta al formulario de inicio de sesión
        return $this->sendFailedLoginResponse($request);
    }
}
