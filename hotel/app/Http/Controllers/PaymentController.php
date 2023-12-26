<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Guest;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payment_method(Request $request){
        $data = $request->all();
        session(['paymentInfo' => $data]);
        // $model = session('paymentInfo');
        return view('Payment.paymentB2');
    }

    public function MakePayment(){
        $paymentInfo = session('paymentInfo');
        
        $guestInfo['G_FirstName'] = $paymentInfo['G_Name'];
        $guestInfo['G_Email'] =$paymentInfo['G_Email'];
        $guestInfo['G_SDT'] = $paymentInfo['G_SDT'];
        $newGuest = Guest::create($guestInfo);
        
        $bookingInfo['B_CheckingDate'] = $paymentInfo['check_in_date'];
        $bookingInfo['B_CheckoutDate'] = $paymentInfo['check_out_date'];
        $bookingInfo['B_Cost'] = 2000000;
        $bookingInfo['G_ID'] = $newGuest['id'];
        
        $newBooking = booking::create($bookingInfo);

        $payment['P_Status'] = "true";
        $payment['P_Type'] = "Tiền mặt";
        $payment['PaidDate'] = today();
        $payment['P_Amount'] = 2000000;
        $payment['B_ID'] = $newBooking['id'];
        Payment::create($payment);

        return view('Payment.paymentB3');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::orderBy('id', 'desc')->get();
        // dd($employee);
        return view('Admin.Payment.index')->with('payments', $payments);    
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $payment = DB::table('payment')->where('id', $id)->first();
        
        return view('Admin.Payment.show')->with('payment', $payment);    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
