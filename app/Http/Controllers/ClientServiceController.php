<?php

namespace App\Http\Controllers;

use App\ClientService;
use Illuminate\Http\Request;

class ClientServiceController extends Controller
{
    public function index()
    {
        $services = ClientService::all();
        return view('clienthome', compact('services'));
    }
}
