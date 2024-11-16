<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

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
           

            return view("index");

        } catch (\Illuminate\Database\QueryException $e) {
            //throw $th;
        }
    }

    public function captureLead(Request $request)
    {
        try {
            $postData = $request->all();
            
            $validatedData = $request->validate([
                "name" => "required",
                "mobile" => "required",
            ]);

            $lead = Lead::create($postData);
           
            return redirect("/thank-you");
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json($e, $this->_statusOK);
        }
    }
}
