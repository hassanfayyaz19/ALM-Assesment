<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $this->isRreshCacheRequested();

        $response = Cache::get('response');
        if (is_null($response)) {
            $response = Http::get('https://cspf-dev-challenge.herokuapp.com/');
            if ($response->failed()) {
                return "Something went wrong";
            }
            $response = $response->object();
            Cache::add('response', $response, now()->addHours(1));
        }
        return view('dashboard', compact('response'));
    }

    private function isRreshCacheRequested()
    {
        if (request()->get('refresh')) {
            Cache::delete('response');
        }
    }
}
