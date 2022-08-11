<?php

namespace App\Http\Controllers;

use App\Models\FunnelDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FunnelRedirect extends Controller
{
    public function index($funnel_hash){
        $redirect_url = '';
        $hash_string =  base64_decode($funnel_hash);;
        $hash_string = explode('/',$hash_string);

        $response = Http::post(env('APP_LINK_GENERATOR'), [
            'funnel' => $hash_string[0],
            'iso'=> $hash_string[1]
        ]);

        $redirect_url = $response->body();

        return redirect($redirect_url, 301);
    }
}
