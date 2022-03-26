<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class AddDataController extends Controller
{
    public function addData(Request $request){
        $student = new Student;
        $student->name = $request->input("name");
        $student->reg_no = $request->input("regNo");
        $student->cgpa = $request->input("cgpa");
        $student->specialization = $request->input("spec");
        $student->resume = $request->file("resume");
        $student->save();

        return redirect("successful");
    }

}
