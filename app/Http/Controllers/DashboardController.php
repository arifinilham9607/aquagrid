<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dataSensor = [
            'kolam_a' => ['suhu' => 29.48, 'ph' => 7.72, 'do' => 5.92, 'salinitas' => 31.4],
            'kolam_b' => ['suhu' => 27.66, 'ph' => 7.57, 'do' => 7.28, 'salinitas' => 30.68],
            'kolam_c' => ['suhu' => 29.04, 'ph' => 7.65, 'do' => 6.77, 'salinitas' => 30.84],
        ];

        return view('dashboard', compact('dataSensor'));
    }
}