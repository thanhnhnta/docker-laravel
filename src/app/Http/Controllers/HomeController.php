<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function welcome(Request $request)
    {
//        Log::build([
//            'driver' => 'single',
//            'path' => storage_path('logs/custom.log'),
//        ])->info('Something happened!');
        return view('welcome');
    }
}
