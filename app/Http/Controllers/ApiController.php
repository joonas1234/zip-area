<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class ApiController extends Controller
{

    public function zipsInArea($area) {

        $zips = json_decode(file_get_contents(storage_path('zips-lower.json')), true);
        return json_encode($zips[$area] ?? null);        

    }

    public function zipsAsKeys() {

       return json_decode(file_get_contents(storage_path('zips-as-keys.json')), true);

    }

    public function areasAndZips(Request $request) {
        
        if($request->input('lower') == true)
            return file_get_contents(storage_path('zips-lower.json'));        

        return file_get_contents(storage_path('zips.json'));        

    }

    public function areas(Request $request) {
        
        if($request->input('lower') == true)
            $zips = json_decode(file_get_contents(storage_path('zips-lower.json')), true);
        else
            $zips = json_decode(file_get_contents(storage_path('zips.json')), true);
        
        return json_encode(array_keys($zips) ?? null);
        
    }

}
