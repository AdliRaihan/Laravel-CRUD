<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestsDBController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gView = \App\GuestsDb::all();
        return view('dashboard',['gview' => $gView]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gStore = new \App\GuestsDb;
        $gStore->id = NULL;
        $gStore->nama = $request->Nama;
        $gStore->nickname = $request->Nick;
        $gStore->instagram_id = $request->igNick;
        $gStore->save();
        
        return redirect('/dash_guest');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $gUpdate = \App\GuestsDb::find($request->updateID);
        $gUpdate->nama = $request->Nama;
        $gUpdate->nickname = $request->Nick;
        $gUpdate->instagram_id = $request->igNick;
        $results = $gUpdate->save();
        if($results === true){
            return redirect('/dash_guest');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = \App\GuestsDb::findOrfail($id);
        if(($results = $data->delete()) === true)
            return redirect('/dash_guest');
    }
}
