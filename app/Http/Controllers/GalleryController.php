<?php

namespace App\Http\Controllers;

use App\Models\Game_playoff;
use App\Models\Game_r1;
use App\Models\Oponent;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $gamesPlayOff = Game_playoff::all();
        $oponents = $gamesPlayOff->team_name;
        dd($oponents);
        return view('gallery', compact('gamesPlayOff', 'oponents'));
    }
}
