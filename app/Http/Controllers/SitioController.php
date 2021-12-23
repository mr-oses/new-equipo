<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

class SitioController extends Controller
{
    public function configDB(){
        try{
            Artisan::call('migrate');
            Artisan::call('storage:link');
            return 'Configuración Exitosa';
        }catch(\Exception $e){
            Log::error($e);
        }
    }

    public function index(){
        $users = User::with('donations')->first();
        //dd($users->donations->first()->monto);

        $totalDonations = DB::table('donations')
            ->selectRaw('sum(monto) as total')
            ->first();

            $donations = DB::table('donations as d')
            ->join('users as u', 'd.user_id', '=', 'u.id')
            ->selectRaw('sum(d.monto) as cuenta, DATE_FORMAT(d.created_at, "%d-%c-%Y") as fecha')
            ->orderByDesc('fecha')
            ->groupBy('fecha')
            ->get();

        return view('index', compact('donations', 'totalDonations'));
    }

    public function config(){
        try{
            Artisan::call('migrate');
            Artisan::call('storage:link');
            return 'Configuración Exitosa';
        }catch(\Exception $e){
            Log::error($e);
        }
    }
}
