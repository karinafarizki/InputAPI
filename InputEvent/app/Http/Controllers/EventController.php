<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return response()->json($events);
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
        if($request->hasFile('poster'))
        $file = $request->file('poster')->store('poster');

       $event= Event::create([ 
            'idkomunitas'=> $request->idkomunitas,
            'nameevent'=> $request->nameevent,
            'tanggalevent'=> $request->tanggalevent,
            'waktu'=> $request->waktu,
            'tempat'=> $request->tempat,
            'deskripsi'=> $request->deskripsi,
            'poster'=> $file
        ]);
            $data = [
                'status' => 'created event successfully',
                'data' => $event
            ];

        return response()->json($data);
    }

    public function storeForm(Request $request)
    {
        // if($request->hasFile('poster')){
        //     $file = $request->file('poster')->store('poster');
        // }
        
        
        
       $event= Event::create([ 
            'idkomunitas'=> $request->idkomunitas,
            'nameevent'=> $request->nameevent,
            'tanggalevent'=> $request->tgl,
            'waktu'=> $request->time,
            'tempat'=> $request->tempat,
            'deskripsi'=> $request->deskripsi,
            'poster'=> $request->poster
        ]);

        session()->flash('success', 'created event successfuly');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
