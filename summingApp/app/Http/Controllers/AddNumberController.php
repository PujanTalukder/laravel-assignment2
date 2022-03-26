<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddNumberController extends Controller
{
    public function addNumber(Request $request){
        $num_1st = $request->input("1st_num");
        $num_2nd = $request->input("2nd_num");

        $sum = (int)$num_1st + (int)$num_2nd;

        return redirect("/")->with("sum", $sum);
    }
}
