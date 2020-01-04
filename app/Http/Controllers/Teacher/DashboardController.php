<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;

class DashboardController extends TeacherController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('teachers.dashboard');
    }
}
