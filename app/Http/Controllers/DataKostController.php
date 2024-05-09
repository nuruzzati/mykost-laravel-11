<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use Illuminate\Http\Request;

class DataKostController extends Controller
{
     public function index() {
        $kost = Kost::all();
        return view('user.kost.index', [
            'title' => 'data-kost',
            'kost' => $kost
        ]);
    }
}
