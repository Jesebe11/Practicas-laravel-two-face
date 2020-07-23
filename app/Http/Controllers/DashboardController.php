<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        echo "<pre>";
        echo "<pre>";

        return view('test',[
            'title' => $request->query('title', 'Valor Default')
        ]);
    }
    
}
