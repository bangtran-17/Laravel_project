<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roomTypes = RoomType::orderBy('id', 'desc')->get();
        $BookingInfo = session('BookingData');


        return view('Booking.Booking', ['roomTypes' => $roomTypes, 'BookingInfo' => $BookingInfo]);
    }
    // public function indexDetail($id)
    // {
    //     $BookingInfo = session('BookingData');
    //     $roomtype =  RoomType::where('id', $id)->first();
    //     dd($roomtype);
    //     return view('Booking.RoomDetail', ['roomTypes' => $roomtype, 'BookingInfo' => $BookingInfo]);
    // }


    public function RoomType($id){
        $BookingInfo = session('BookingData');
        $roomtype =  RoomType::where('id', $id)->first();

        return view('Booking.RoomDetail',['roomTypes' => $roomtype, 'BookingInfo' => $BookingInfo]);
    }

    
    public function payMentInfo($id){
        $BookingInfo = session('BookingData');
        $roomtype =  RoomType::where('id', $id)->first();

        return view('Payment.paymentB1',['roomTypes' => $roomtype, 'BookingInfo' => $BookingInfo]);
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

    }

    /**
     * Display the specified resource.
     */
    public function show(RoomType $roomType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomType $roomType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomType $roomType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomType $roomType)
    {
        //
    }
}
