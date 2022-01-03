<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;
use Auth;
use Hash;


class ChangePasswordController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit() {
        return view('auth.change_password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
        $request->validate([
            'password' => ['required', Rules\Password::defaults(), 'confirmed', 'min:8']
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect(route('dashboard.index'))->with('success', 'رمز عبور با موفقیت تغییر کرد.');
    }
}
