<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use Auth;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Auth::user()) {
            $carts = ShoppingCart::where('user_id', Auth::user()->id)->get();
            return view('dashboard.index')->with('carts', $carts);
        } else {
            return redirect(route('login'))->with('info', 'شما وارد سایت نشده اید.');
        }
    }

    
    public function update_info(Request $request) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:10240',
            'name' => 'nullable|string|max:60',
            'email' => 'nullable|email|max:255',
            'info' => 'nullable|string|max:1024',
        ]);

        $user = Auth::user();

        $user->update($request->all());

        if ($request->image) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('img/profile'), $imageName);
            $user->image_path = 'img/profile/' . $imageName;
            $user->save();
        }

        return redirect(route('dashboard.index'))->with('success', 'اطلاعات کاربری با موفقیت بروزرسانی شد.');
    }


    public function update_address(Request $request) {
        $request->validate([
            'province' => 'nullable|string|max:40',
            'city' => 'nullable|string|max:40',
            'detail' => 'nullable|string|max:1024',
        ]);
        
        Auth::user()->address->update($request->all());
        return redirect(route('dashboard.index'))->with('success', 'آدرس با موفقیت بروزرسانی شد.');
    }
}
