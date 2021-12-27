<?php

namespace App\Http\Controllers;

use Exception;
use App\Donation;
use Illuminate\Http\Request;
use App\Services\SitioService;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index(){
        $totales = SitioService::getTotales();
        $donations = Donation::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('donation.index', compact('totales', 'donations'));
    }

    public function create() {
        $totales = SitioService::getTotales();

        return view('donation.create', compact('totales'));
    }

    public function store(Request $request) {
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

    public function update(Request $request, $id)
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
