<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;

class ChangePhoneController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        return view('auth.change_phone');
    }


    public function verify_phone() {
        return view('auth.verify_phone');
    }

    /**
     * Store the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $request->validate([
            'phone' => 'required|regex:/(09)[0-9]{9}/|digits:11|numeric|unique:users'
        ]);

        $user = Auth::user();
        $user->token = create_token();
        $user->token_expires_at = next5Min();
        $user->save();
        $request->session()->put('phone', $request->phone);
        return redirect(route('verify_phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'token' => 'required|min:6|max:6',
        ]);

        $phone = $request->session()->get('phone');
        $token = $request->token;
        $user = Auth::user();
        
        if ($user->token_expired()) {
            $messages = $validator->errors();
            $messages->add('token.expired', 'کد وارد شده منقضی شده است.');
            return back()->withErrors($messages)->withInput();    
        }

        if ($user->token === $token) {
            $user->phone = $phone;
            $user->save();
            return redirect(route('dashboard.index'))->with('success', 'شماره تلفن با موفقیت ویرایش شد.');
        }

        $messages = $validator->errors();
        $messages->add('token', 'کد وارد شده صحیح نیست.');
        return back()->withErrors($messages)->withInput();
    }
}
