<?php

namespace App\Http\Controllers\Patients;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class PatientsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::get();
        return view('patients.index')->with('patients', $patients);
    }

    /**
     * Display a view for new patients.
     *
     * @return \Illuminate\Http\Response
     */
    public function new_patients()
    {
        $testsInfo = json_decode(file_get_contents(storage_path() . "/statics/testsInfo.json"), true);

        return view('patients.new')->with('testsInfo', $testsInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        Patient::create([
            'date' => $request['grid-date'],
            'name' => $request['grid-full-name'],
            'age' => $request['grid-age'],
            'sex' => $request['grid-sex'],
            'testsNames' => $request->testsNames,
            'testsAmount' => $request->testsAmount,
            'address' => $request['grid-address'],
            'contact' => $request['grid-contact'],
        ]);
        return response('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testsInfo = json_decode(file_get_contents(storage_path() . "/statics/testsInfo.json"), true);
        $patient = Patient::whereId($id)->first();

        $testsNames = explode(',', $patient->testsNames);
        return view('patients.view')->with([
            'patient' => $patient,
            'testsNames' => $testsNames,
            'testsInfo' => $testsInfo,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePat(Request $request)
    {
        Patient::whereId($request['id'])->update([
            'date' => $request['grid-date'],
            'name' => $request['grid-full-name'],
            'age' => $request['grid-age'],
            'sex' => $request['grid-sex'],
            'testsNames' => $request->testsNames,
            'testsAmount' => $request->testsAmount,
            'contact' => $request['grid-address'],
            'address' => $request['grid-contact'],
        ]);
        return response('Succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Patient::whereId($id)->delete();
        $patients = Patient::get();
        return view('patients.index')->with('patients', $patients);
    }
}
