<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $newProducts = '';
        $hotProducts = '';
        
        // return view('clients.home', compact('newProducts'));
        return view('clients.home');
    }
}
