<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __construct()
    {
        $this->layout = check_device("mobile") ? "mobile." : "";
    }
    
    public function index(Request $request)
    {
        try {
            $request->session()->get("userData");
           

            return view($this->layout . "index");

        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }
}
