<?php

namespace App\Http\Controllers;

use Exception;
use App\Donation;
use App\Http\Requests\Donation\FormDonation;
use Illuminate\Http\Request;
use App\Services\SitioService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index(){
        $totales = SitioService::getTotales();

        $acumulado = DB::table('donations as d')
        ->join('users as u', 'd.user_id', '=', 'u.id')
        ->selectRaw('sum(d.monto) as total')
        ->where('u.id', Auth::id())
        ->first();

        $donations = Donation::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();
        return view('donation.index', compact('totales', 'donations', 'acumulado'));
    }

    public function create() {
        $totales = SitioService::getTotales();

        return view('donation.create', compact('totales'));
    }

    public function store(FormDonation $request) {
        try {
            $donation = new Donation();
            $donation->user()->associate(Auth::user());
            $donation->monto = $request->monto;
            $donation->save();
            session(['success'=>'La donación se realizó correctamente.']);
        } catch (Exception $e) {
            session(['error'=>'Se produjo un error al intentar realizar la donación.']);
        }
    }

    public function edit($id)
    {
        $donation = Donation::findOrFail($id);

        return view('donation.edit', compact('donation'));
    }

    public function update(FormDonation $request, $id)
    {
        try {
            $donation = Donation::findOrFail($id);
            $donation->monto = $request->monto;
            $donation->save();

            session(['success'=>'La donación se modificó correctamente.']);
        } catch (Exception $e) {
            session(['error'=>'Se produjo un error al intentar modificar la donación.']);
        }
    }

    public function destroy($id)
    {
        try {
            Donation::findOrFail($id)->delete();
            //TODO ver si se implementa con ajax para ver que retornar.
        } catch (Exception $e) {
        }
    }
}
