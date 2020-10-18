<?php

namespace App\Http\Controllers;

use App\Models\Incident;

class HeroController extends Controller
{
    public function home()
    {
        $incidents = Incident::query()->orderBy('created_at', 'desc')->paginate(6);

        return view('web.hero.home', ['incidents' => $incidents]);
    }
}
