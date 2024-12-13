<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $mas = Mas::all();
        $mas = [
            'labels' => ['nama', 'status_karyawan'],
            'datasets' => [
                [
                    'label' => 'Data Karyawan',
                    'backgroundColor' => 'rgba(54, 162, 235, 0.5)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'data' => [100, 200, 150, 300, 250],
                ]
            ]
        ];
        return view('admin.home', compact('mas'));
    }
}
