<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserController extends Controller
{
    //
    public function create(){
        return view('account');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'first_name'=>['required'],
            'last_name'=>['required'],
            'contact_no'=>['required'],
            'email'=>['required', 'email', Rule::unique('users', 'email')],
            'password'=>['required']
        ]);

        $validated['password'] = bcrypt($validated['password']);

        User::create($validated);

        return back()->with('message_success', 'Your Account has been Successfully Created.');

        // return dd($request);
    }

    public function processLogin(Request $request){
        $validated = $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required']
        ]);

        $user = User::where('email', $validated['email'])->first();

        if($user && auth()->attempt($validated)) {
            auth()->login($user);
            $request->session()->regenerate();
            return redirect('/costumer');
        }
        else {
            return back()->with('message_failed', 'Incorect Email or Password.');
        }
    }
    public function processlogout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}