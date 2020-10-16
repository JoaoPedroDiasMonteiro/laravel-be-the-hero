<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->ong = $request->ong;
        $user->email = $request->email;
        $user->whatsapp = $request->whatsapp;
        $user->city = $request->city;
        $user->uf = $request->uf;
        $user->password = Hash::make($request->password);

        if ($user->save()){
           return (new LoginController())->authenticate($request);
        }

        return redirect(route('web.register'))->with('message', 'Qualquer coisa :)');
    }

    public function update(Request $request, User $user)
    {
        $user->ong = $request->ong;
        $user->whatsapp = $request->whatsapp;
        $user->city = $request->city;
        $user->uf = $request->uf;
        $user->password = Hash::make($request->password);

        $user->save();
    }

    public function destroy(User $user)
    {
        $user->delete();
    }
}
