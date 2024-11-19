<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homePage() {
        return view("admin.home-page");
    }

    public function contactPage(){
        return view("admin.contact-page");
    }
 
    public function loadChartJsPage(){
        return view("admin.chartjs-page");
    }
 
}
