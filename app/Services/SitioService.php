<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SitioService{
    public static function getTotales(){
        $totalDonations = DB::table('donations')
            ->selectRaw('sum(monto) as total')
            ->first();

        $donations = DB::table('donations as d')
            ->join('users as u', 'd.user_id', '=', 'u.id')
            ->selectRaw('sum(d.monto) as cuenta, DATE_FORMAT(d.created_at, "%d-%c-%Y") as fecha')
            ->orderByDesc('fecha')
            ->groupBy('fecha')
            ->get();

        return [
            "totalDonations" => $totalDonations->total,
            "donations" => $donations
        ];
    }
}

