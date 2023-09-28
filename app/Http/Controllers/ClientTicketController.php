<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientTicketController extends Controller
{
    public function ticket() {
        return view('ticket');
    }
}
