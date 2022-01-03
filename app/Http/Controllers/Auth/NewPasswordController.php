<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\User;


class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request) {
        return view('auth.reset_password', ['request' => $request]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'confirmed', Rules\Password::defaults(), 'min:8'],
        ]);
        
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $phone = $request->session()->get('phone');
        $user = User::where('phone', $phone)->first();
        
        if ($user) {
            $user->password = Hash::make($request->password);
            $user->save();
            $request->session()->forget('phone');
            $request->session()->forget('token');
            return redirect(route('login'))->with('success', 'رمز عبور با موفقیت تغییر کرد.');
        }

        $messages = $validator->errors();
        $messages->add('password', 'رمز عبور ها یکسان نیستند.'); // Add the message
        return back()->withErrors($messages)->withInput();
    }
}
