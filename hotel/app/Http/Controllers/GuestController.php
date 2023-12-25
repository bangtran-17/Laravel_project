<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guests = Guest::orderBy('G_ID', 'desc')->get();

        return view('Admin.Guest.index')->with('guests', $guests);
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
        $data = $request->all();
        // dd($request);
        Guest::create($data);
        return redirect('/admin/guests');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $guest = DB::table('guest')->where('G_ID', $id)->first();
        // dd($employee);
        
        return view('Admin.Guest.show')->with('guest', $guest);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $employee =  Guest::where('G_ID', $id)->update([
            'G_FirstName' => $request->input('G_FirstName'),
            'G_Email' => $request->input('G_Email'),
            'G_SDT' => $request->input('G_SDT'),
            'G_CCCD' => $request->input('G_CCCD')
        ]);
        
        return redirect('/admin/guests');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guest = Guest::where('G_ID', $id)->delete();
        // dd($guest);
        return redirect('/admin/guests');
    }
}
