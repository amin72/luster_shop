<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:60'],
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $phone = $request->phone;
        $token = create_token();

        $user = User::create([
            'name' => $request->name,
            'phone' => $phone,
            'password' => Hash::make($request->password),
            'token' => $token,
            'token_expires_at' => next5Min(),
        ]);

        event(new Registered($user));
        // $user->address()->create();
        Auth::login($user);
        
        // send token to user
        sendSMSToken($phone, $token, 'activate_user');

        // put phone number in session
        $request->session()->put('phone', $phone);
        
        return redirect(route('user_activate'));
    }
}
