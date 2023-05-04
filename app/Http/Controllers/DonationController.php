<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class DonationController extends Controller
{
    public function index() {
        return view('donations.index');
    }

    public function donate(Request $request) {
        // insert donation
//        $request->request->add(['donor_id' => Auth::id()]);
//        $newDonation = Donation::create($request->all());
        $newDonation = 'newDonation';

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

//        $params = array(
//            'transaction_details' => array(
//                'order_id' => $newDonation->id,
//                'gross_amount' => $newDonation->amount,
//            ),
//            'customer_details' => array(
//                'first_name' => Auth::user()->name,
//                'email' => Auth::user()->email,
//            ),
//        );
        // temp data
        $params = array(
            'transaction_details' => array(
                'order_id' => 1,
                'gross_amount' => 100000,
            ),
            'customer_details' => array(
                'first_name' => 'Paijo',
                'email' => 'paijo@mail.com',
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('donations.donasi_co', compact('snapToken', 'newDonation'));
    }

    public function midtrans_cb(Request $request) {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amound . $serverKey);
        if ($hashed == $request->signature_key and $request->transaction_status == 'capture' or $request->transaction_status == 'settlement') {
            $donation = Donation::find($request->order_id);
            $donation->update(['status' => 'SUCCESS', 'paid_at' => Date::now()]);
        }
    }

    public function getUserDonation() {
//        $user = Auth::id();
        $user = 1;
        $donations = Donation::where('donor_id', $user)->orderBy('paid_at', 'desc')->get();
        return redirect()->route('')->with('success', 'Some success message'); // TODO: need route
    }
}
