<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cleaner;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $services = Service::all();
        $cleaners = Cleaner::all();
        return view('frontend.index', compact('services', 'cleaners'));
    }
}
