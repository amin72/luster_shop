<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class UserActivateController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        return view('auth.user_activate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'token' => 'required|min:6|max:6',
        ]);
        
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $messages = $validator->errors();
        $token = $request->token;
        $user = Auth::user();

        if ($user->token === $token) {
            if (! $user->token_expired()) {
                $user->is_active = true;
                $user->save();
                return redirect(route('pages.index'));
            }

            $messages->add('token.expired', 'کد وارد شده منقضی شده است.');
            return back()->withErrors($messages)->withInput();
        } else {
            $messages->add('token', 'کد وارد شده صحیح نیست.'); // Add the message
            return back()->withErrors($messages)->withInput();
        }
    }

    // resend activation token
    public function update(Request $request) {
        $user = Auth::user();
        $token = create_token();
        $user->token = $token;
        $user->token_expires_at = next5Min();
        $user->save();

        $phone = $user->phone;

        // send token to user
        sendSMSToken($phone, $token, 'activate_user');

        // put phone number in session
        $request->session()->put('phone', $phone);
        
        return back()->with('success', 'کد فعال سازی به شماره تلفن شما ارسال شد.');
    }
}
