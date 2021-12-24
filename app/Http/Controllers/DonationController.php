<?php

namespace App\Http\Controllers;

use Exception;
use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation.index');
    }

    public function create()
    {
        return view('donation.create');
    }

    public function store(Request $request)
    {
        try {
            $donation = new Donation();
            $donation->user()->associate(Auth::user());
            $donation->monto = $request->montoDonacion;
            $donation->save();

            return redirect()->back()->with('success', 'La donación se realizó correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Se produjo un error al intentar realizar la donación.');
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

            return redirect()->back()->with('success', 'La donación se actualizó correctamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Se produjo un error al intentar actualizar la donación.');
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
