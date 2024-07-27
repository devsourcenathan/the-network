<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Galery;
use App\Models\Lodgment;
use App\Models\LodgmentType;
use App\Models\Reservation;
use App\Models\Town;
use App\Models\User;
use App\Models\Activity;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['home', 'service', 'lodgment', 'about', 'contact']);
    }


    public function index()
    {
        return view('client.pages.index');
    }
}
