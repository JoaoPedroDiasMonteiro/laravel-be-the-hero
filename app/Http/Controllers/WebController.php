<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestroyIncident;
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

    public function destroyIncident(DestroyIncident $request, Incident $incident)
    {
        $request->incident->delete();

        return redirect(route('web.profile'));
    }

    public function profile()
    {
        $incidents = Auth::user()->incidents()->orderBy('created_at', 'DESC')->get();
        $user = Auth::user();

        return view('web.profile', ['incidents' => $incidents, 'user' => $user]);
    }

    public function register()
    {
        return view('web.register');
    }
}
