<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use App\Services\SitioService;

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
        $totales = SitioService::getTotales();

        return view('index', compact('totales'));
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
