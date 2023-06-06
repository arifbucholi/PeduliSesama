<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;


class DonationController extends Controller
{
    public function index($id)
    {
        $data = Campaign::find($id);
        $totalDonation = Donation::where('campaign_id', $id)->sum('amount');
        // dd($data);
        return view('donations.form',['c'=>$data, 'totalDonation'=>$totalDonation]);
    }

    function detail($id)
    {
        $data = Campaign::find($id);
        $totalDonation = Donation::where('campaign_id', $id)->sum('amount');
        // dd($totalDonation);
        $desc = Donation::where('campaign_id',$id)->get();
        $descCount = Donation::where('campaign_id', $id)->count();

        // dd($desc);
        return view('donasi-single',[
            'c'=>$data,
            'totalDonation'=>$totalDonation,
            'desc' => $desc,
            'descCount' => $descCount

            ]) ;
    }

    public function donate(Request $request) {
        // insert donation
        $c = Campaign::find($request['donations.confirm']);
        $newDonation = Donation::create([
            'amount' => $request->input('amount'),
            'donor_id' => Auth::id(),
            'campaign_id' => $request->input('campaign_id'),
            'is_donor_hidden' => $request->input('is_donor_hidden'),
            'desc' => $request->input('desc'),
            'category' => $request->input('category'),
            // tambahkan kolom-kolom lain yang sesuai dengan request
        ]);
        // $newDonation = Donation::create($request->all()->except['title']);

        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;


        // $strDonation = substr($newDonation->campaigns->title,0,3);
        // temp data
        $params = array(
            'transaction_details' => array(
                // 'order_id' => $strDonation.str_pad($newDonation->id,5,"0",STR_PAD_LEFT),
                'order_id' => $newDonation->id,
                'gross_amount' => $newDonation->amount,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                'email' => auth()->user()->email,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('donations.confirm', compact('snapToken','c','newDonation'));
    }

    public function midtrans_cb(Request $request) {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amound . $serverKey);
        if ($hashed == $request->signature_key && $request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
            $donation = Donation::find($request->order_id);
            $donation->update(['status' => 'SUCCESS', 'paid_at' => Date::now()]);
        }
    }

    // public function getUserDonation() {
    //    $user = Auth::id();
    //     $user = 1;
    //     $donations = Donation::where('donor_id', $user)->orderBy('paid_at', 'desc')->get();
    //     return redirect()->route('')->with('success', 'Some success message'); // TODO: need route
    // }

    public function getUserDonation() {
        $user = Auth::id();
        // $user = 1;
        $no=1;
        $d = Donation::where('donor_id', $user)->with('campaigns')->orderBy('paid_at')->get();
        // dd($d);
        return view('transaksiuser', compact('d','no')); // TODO: need route
    }

    // public function show($id){
    //     $campaign = Campaign::find($id);

    //     // Jika kampanye ditemukan, Anda dapat melakukan tindakan lain, misalnya menampilkan data kampanye ke view
    //     return view('donations', compact('campaign'));
    // }

    public function categoryList()
    {
        // Mendapatkan data kategori dan jumlahnya dari tabel Campaign
        $categoryCounts = Campaign::select('category', DB::raw('COUNT(*) as count'))
        ->groupBy('category')
        ->pluck('count', 'category')
        ->toArray();

        // Mengirimkan data ke tampilan (view)

        // dd($categoryCounts);
        return view('donasi-single', compact('categoryCounts'));

    }

    public function sideProgram()
    {

        $campaigns =Campaign::all();
        // dd($campaigns);
        return view('donasi-single', compact('campaigns'));

    }

}
