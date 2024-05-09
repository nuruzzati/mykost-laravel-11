<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;
use Illuminate\Http\Request;

class DataPenghuniController extends Controller
{
    public function index() {
        $penghuni = Penghuni::all();
        return view('user.penghuni.index', [
            'title' => 'data-penghuni',
            'penghuni' => $penghuni
        ]);
    }
}
