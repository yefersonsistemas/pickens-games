<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParticipantTictactoe;
use App\RankingTictactoe;
class TictactoeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ranking = RankingTictactoe::get();
        
        return response()->json($ranking);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function participant(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;

        if ($name !=null && $email !=null && $phone !=null) {
            $participant = ParticipantTictactoe::create([
                'name'=> $name,
                'email'=> $email,
                'phone'=> $phone
                ]);
        
                return response()->json([ 'message' => 'Jugador Registrado']);
        }else{
            return response()->json([ 'message' => 'Datos Invalido']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
