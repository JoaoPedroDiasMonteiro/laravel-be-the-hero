<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIncident;
use App\Models\Incident;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function Logon()
    {
        return view('web.logon');
    }

    public function newIncident()
    {
        return view('web.newIncident');
    }

    public function storeIncident(StoreIncident $request)
    {
        $validated = (object) $request->validated();

        $incident = new Incident();
        $incident->user_id = Auth::user()->id;
        $incident->title = $validated->title;
        $incident->description = $validated->description;
        $incident->value = $validated->value;
        $incident->save();

        return redirect(route('web.profile'));
    }

    public function profile()
    {
        $incidents = Auth::user()->incidents();

        return view('web.profile', ['incidents' => $incidents]);
    }

    public function register()
    {
        return view('web.register');
    }
}
