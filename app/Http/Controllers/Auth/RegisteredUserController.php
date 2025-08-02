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

        $users = User::all();
        return view('auth.register', compact('users'));
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
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

       return back()->with('alert-success','Admin added successfully');
    }

    public function destroy($id)
    {

      $user = User:: findorFail($id);

      if($user->role =='admin'){
        return back()->with('alert-warning','This admin cannot be deleted');
    }elseif(Auth()){
        
        return back()->with('alert-warning','This admin is logged in and cannot be deleted Kindly switch account');
      }
      else{
      return 'del';
        $user->delete();
      }

      return back()->with('alert-success', 'Admin User deleted successfully');
    }
}
