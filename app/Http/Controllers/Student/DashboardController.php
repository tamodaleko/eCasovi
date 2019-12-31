<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;

class DashboardController extends StudentController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
