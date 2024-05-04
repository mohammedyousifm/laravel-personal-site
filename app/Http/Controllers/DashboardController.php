<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Information;
use Illuminate\Http\Request;
use App\Models\visitors;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $hosting_date = DB::table('information')->select('hosting_date')->first();
        $count_visits = DB::table('Visitors')->count();
        return view('Dashboard/dashboard', ['hosting_date' => $hosting_date, 'count_visits' => $count_visits]);
    }
}
