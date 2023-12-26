<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = booking::orderBy('id', 'desc')->get();

        return view('Admin.Booking.index')->with('bookings', $bookings);

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
        $request->R_Number;

        if($request->R_Number != null){
            $data = $request->all();

            $Rid = DB::table('room')->where('R_Number', $request->R_Number)->first();

            if($Rid != null){
                $data['Rid'] = $Rid->id;
            }
            else
            {
                return redirect()->back()->withErrors(['message' => 'Không tìm thấy phòng với tên đã cho']);
            }
            // $R_ID = DB::table('')

            booking::create($data);
            return redirect('/admin/bookings'); 
        }
        else
        {
            $data = $request->all();
            booking::create($data);
            return redirect('/admin/bookings'); 
        }   
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $booking = DB::table('booking')->where('id', $id)->first();
        // dd($employee);
        $booking->R_Number = Room::where('id',$booking->Rid)->first()->R_Number;
        return view('Admin.Booking.show')->with('booking', $booking);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $Rid = Room::where("R_Number", $request->R_Number)->first();
        // dd($Rid);
        if($Rid == null){
            return redirect()->back()->withErrors(['message' => 'Không tìm thấy phòng ban với tên đã cho']);
        }

        $employee =  booking::where('id', $id)->update([
            'B_DATE' => $request->input('B_DATE'),
            'B_StayDuration' => $request->input('B_StayDuration'),
            'B_CheckingDate' => $request->input('B_CheckingDate'),
            'B_CheckoutDate' => $request->input('B_CheckoutDate'),
            'B_Amount' => $request->input('B_Amount'),
            'E_ID' => $request->input('E_ID'),
            'G_ID' => $request->input('G_ID'),
            'B_Status' => $request->input('B_Status'),
            'Rid' => $Rid->id,
            'B_Cost' => $request->input('B_Cost')
        ]);
        
        return redirect('/admin/bookings');    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $guest = booking::where('id', $id)->delete();
        // dd($guest);
        return redirect('/admin/bookings');    
    }
}
