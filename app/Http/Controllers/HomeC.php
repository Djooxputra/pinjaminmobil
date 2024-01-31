<?php

namespace App\Http\Controllers;

use App\Models\CarM;
use Illuminate\Http\Request;

class HomeC extends Controller
{
    public function index()
    {
        $x["title"] = "Home";
        $x["page"] = "home";
        $x["carData"] = CarM::all();
        return view("apps", $x);
    }
}
