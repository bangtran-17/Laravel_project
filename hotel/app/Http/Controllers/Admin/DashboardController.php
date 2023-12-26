<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
class DashboardController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function getData(Request $request){
        $roomTypes = RoomType::orderBy('id', 'desc')->get();
        $data = $request->all();
        session(['BookingData' => $data]);
        // dd($data);
        // $model = session('paymentInfo');
        return view('Booking.Booking', ['roomTypes' => $roomTypes, 'BookingInfo' => $data]);
    }


}
