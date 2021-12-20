<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index(){
         return view('donation.index');
    }

    public function store(Request $request){
        $donation = new Donation();
        // dd($donation);
        // dd(Auth::user());
        $donation->user()->associate(Auth::user());
        $donation->monto = 1800;

        $donation->save();

        return redirect()->back()->with('success', 'La donación se realizó correctamente.');
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        Donation::findOrFail($id)->delete();
    }
}
