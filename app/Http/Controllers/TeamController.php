<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
//        $team = Team::all();
//        dd($team);
        return view('team.index',[
            'team'=>Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $team = Team::all();
        return view('team.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $data = request()->validate([
            'name'=>'string',
            'namber'=>'',
            'position'=>'',
            'byrthday'=>'',
            'height'=>'',
            'weight'=>'',
            'jump'=>'',
            'image'=>'',
        ]);
//        dd($data);
        Team::create($data);
        return redirect()->route('teamPlayer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $player_id)
    {
        return view('team.show', compact('player_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $player_id)
    {
        return view('team.edit', compact('player_id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Team $player_id)
    {
        $data = request()->validate([
            'name'=>'string',
            'namber'=>'',
            'position'=>'',
            'byrthday'=>'',
            'height'=>'',
            'weight'=>'',
            'jump'=>'',
            'image'=>'',
        ]);
//        dd($data);
        Team::updated($data);
        return redirect()->route('teamPlayer', $player_id->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function dalete()
    {
        $team = Team::withTrashed()->find(4);
        $team -> restore();
        dd('del');

    }
}
