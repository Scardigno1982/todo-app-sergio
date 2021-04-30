<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortalController extends Controller
{
    public function pepito() {

//        $estados = DB::table('statuses')->get();
//
        return view('/perrito');

    }
}
