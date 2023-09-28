<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientHallController extends Controller
{
    public function hall() {
        return view('hall');
    }
}
