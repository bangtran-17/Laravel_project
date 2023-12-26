<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = DB::table('room')->get();
        // $rooms = Room::orderBy('id', 'desc')->get();
        // dd($rooms);
        // dd($employee);
        return view('Admin.Room.index')->with('rooms', $rooms);     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(DB::table('employee'));
        // dd(Room::all());
        // dd(DB::table('room')->get());
        $data = $request->all();
        // dd($data);
        // dd($request);
        Room::create($data);
        return redirect('/admin/rooms');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $room = DB::table('room')->where('id', $id)->first();
        
        return view('Admin.Room.show')->with('room', $room);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department =  Room::where('id', $id)->update([
            'R_Number' => $request->input('R_Number'),
            'RT_ID' => $request->input('RT_ID'),
            'R_Available' => $request->input('R_Available'),
            'Status' => $request->input('Status')
        ]);

        return redirect('/admin/rooms');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guest = Room::where('id', $id)->delete();
        
        return redirect('/admin/rooms');    
    }
}
