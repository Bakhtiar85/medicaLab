<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $hp_data = json_decode(file_get_contents(storage_path() . "/statics/hopitals.json"), true);
        $patientCount = Patient::get()->count();
        $testsInfo = json_decode(file_get_contents(storage_path() . "/statics/testsInfo.json"), true);
        return view('layouts.index')->with([
            'patientCount'=> $patientCount,
            'testsInfo'=> $testsInfo,
            'hp_data'=>$hp_data
        ]);
    }
    public function store(Request $request)
    {
        dd("hello guy");
    }
    public function error()
    {
        return view('auth.error');
    }
}
