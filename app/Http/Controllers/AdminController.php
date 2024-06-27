<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminSearchPage(){
        return view('adminSearchResults');
    }
}
