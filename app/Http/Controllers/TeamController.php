<?php

namespace App\Http\Controllers;

//use App\Models\Statistik;
use App\Models\Team;
use App\Models\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $id, User $user):View
    {
        $user = User::where('role', 'admin')->first();
//        $user = Team::all();
//        $role = $user -> role;
//        dd($user->role);
        return view('team.index', compact('id', 'user'),[
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
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'',
            'namber'=>'',
            'position'=>'',
            'nacionality'=>'',
            'bith_place'=>'',
            'byrthday'=>'',
            'insta'=>'',
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
    public function show(Team $id, User $model)
    {
//        $role = User::find(1);
//        dd($role->role);
        $team = Team::find(1);
        $statistiks = $team -> stat;
//        dd($statistiks);
        return view('team.show', compact('id', 'statistiks', 'model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $id)
    {
        return view('team.edit', compact('id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $id)
    {
        $request -> validate([
            'name'=>'',
            'namber'=>'',
            'position'=>'',
            'nacionality'=>'',
            'bith_place'=>'',
            'byrthday'=>'',
            'insta'=>'',
            'height'=>'',
            'weight'=>'',
            'jump'=>'',
            'image'=>'',
        ]);
//        dd($request);
        $id->fill($request->post())->update();
        return redirect()->route('showPlayer', $id->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Team $id)
    {
        $id->delete();
        return redirect()->route('teamPlayer');
    }
}
