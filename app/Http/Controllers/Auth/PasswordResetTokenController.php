<?php

namespace App\Http\Controllers\Auth;

use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PasswordReset;


class PasswordResetTokenController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        return view('auth.password_reset_token');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'token' => 'required|min:6|max:6',
        ]);

        $password_reset = PasswordReset::where([
            'phone' => $request->session()->get('phone'),
            'token' => $request->token])->first();
            
        if ($password_reset) {
            if ($password_reset->token_expired()) {
                $messages = $validator->errors();
                $messages->add('token.expired', 'کد وارد شده منقضی شده است.'); // Add the message
                return back()->withErrors($messages)->withInput();    
            }

            return redirect(route('password.reset'));
        }

        $messages = $validator->errors();
        $messages->add('token', 'کد وارد شده صحیح نیست.'); // Add the message
        return back()->withErrors($messages)->withInput();
    }


    // resend activation token
    public function update(Request $request) {
        $phone = $request->session()->get('phone');
        $password_reset = PasswordReset::where('phone', $phone)->first();
        if ($password_reset) {
            $password_reset->token = create_token();
            $password_reset->token_expires_at = next5Min();
            $password_reset->save();
            return back()->with('success', 'کد جهت تغییر رمز به شماره تلفن شما ارسال شد.');
        } else {
            $validator = Validator::make($request->all(), []);
            $messages = $validator->errors();
            $messages->add('phone', 'کاربری با این شماره تلفن یافت نشد.'); // Add the message
            return back()->withErrors($messages)->withInput();
        }
    }
}
