<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class StudentClassController extends Controller
{
    public function ViewStudent() {
        $data['allData'] = StudentClass::all();
        return view('backend.setup.student_class.view_class', $data);
    }
}
