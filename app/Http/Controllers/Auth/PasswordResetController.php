<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PasswordReset;
use App\Models\User;


class PasswordResetController extends Controller {
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('auth.forgot_password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $phone = $request->phone;
        $user = User::where('phone', $phone)->first();

        if (! $user) {
            $messages = $validator->errors();
            $messages->add('phone.notfound', 'کاربری با این شماره تلفن یافت نشد.'); // Add the message
            return back()->withErrors($messages)->withInput();
        }

        $password_reset = PasswordReset::where('phone', $phone)->first();
        $token = create_token();

        if ($password_reset) {
            $password_reset->token = $token; // assign new token
            $password_reset->token_expires_at = next5Min();
            $password_reset->save();
        } else {
            PasswordReset::create([
                'token' => $token,
                'token_expires_at' => next5Min(),
                'phone' => $phone
            ]);

        }
        
        // send token to user
        sendSMSToken($phone, $token, 'reset_password');

        // put phone number in session
        $request->session()->put('phone', $phone);

        // then redirect to password reset view
        return redirect(route('password_reset_token'));
    }
}
