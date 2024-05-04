<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\visitors;
use App\Models\skills;
use App\Models\Information;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        $ip = $request->ip();
        $visitor = Visitors::firstOrCreate(['ip_address' => $ip]);
        $visitor->increment('visits');
        $visitor->save();


        $skills = DB::table('skills')->get();
        $info = DB::table('information')->first();

        return view('website/home', ['skills' => $skills, 'info' => $info]);
    }
}
