<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(RegisterUser $request)
    {
        $validatedData = (object)$request->validated();

        $user = new User();
        $user->ong = $validatedData->ong;
        $user->email = $validatedData->email;
        $user->whatsapp = $validatedData->whatsapp;
        $user->city = $validatedData->city;
        $user->uf = $validatedData->uf;
        $user->password = Hash::make($validatedData->password);

        $user->save();

        return (new LoginController())->authenticate($request);
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
