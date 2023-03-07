<?php

namespace App\Http\Controllers;

use App\Models\Statistik;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StatistikController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Statistik $id):View
    {
        return view('statistiks.index', compact('id'),[
            'team'=>Statistik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stat = Statistik::all();
//        dd($stat);
        return view('statistiks.create', compact('stat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request = request()->validate([
            'name'=>'string',
            'PlayerNu'=>'',
            'PlayedSet'=>'',
            'TotPoint'=>'',
            'TotServ'=>'',
            'AceServ'=>'',
            'ErrServ'=>'',
            'EffServ'=>'',
            'TotRes'=>'',
            'ErrRes'=>'',
            'NegRes'=>'',
            'ExcRes'=>'',
            'TotAtac'=>'',
            'ErrAtac'=>'',
            'BlkAtec'=>'',
            'ExcAtec'=>'',
            'EffAtec'=>'',
            'Block'=>'',
        ]);
//        dd($request);
        Statistik::create($request);
        return redirect()->route('statPlayer');
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistik $id)
    {
        return view('statistiks.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistik $id)
    {
        return view('statistiks.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistik $id)
    {
        $request ->validate([
            'name'=>'string',
            'PlayerNu'=>'',
            'PlayedSet'=>'',
            'TotPoint'=>'',
            'TotServ'=>'',
            'AceServ'=>'',
            'ErrServ'=>'',
            'EffServ'=>'',
            'TotRes'=>'',
            'ErrRes'=>'',
            'NegRes'=>'',
            'ExcRes'=>'',
            'TotAtac'=>'',
            'ErrAtac'=>'',
            'BlkAtec'=>'',
            'ExcAtec'=>'',
            'EffAtec'=>'',
            'Block'=>'',
        ]);
        $id->fill($request->post())->update();
        return redirect()->route('showStatPlayer', $id->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistik $id)
    {
        $id->delete();
        return redirect()->route('statPlayer');
    }
}
