<?php

namespace App\Http\Controllers;

use App\Models\FunnelDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FunnelRedirect extends Controller
{
    public function index($funnel_hash){
        $redirect_url = '';
        $funnel_name = base64_decode($funnel_hash);

        $response = Http::post(env('APP_LINK_GENERATOR'), [
            'funnel' => $funnel_name,
        ]);

        $redirect_url = $response->body();

        return $redirect_url;//redirect($redirect_url, 301);
    }
}
