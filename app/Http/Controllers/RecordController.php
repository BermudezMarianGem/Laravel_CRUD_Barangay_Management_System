<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Record;

class RecordController extends Controller
{
    //
    public function index()
    {
        $records = Record::all();

        $data = [
            'records' => $records
        ];

        return view('bins.home', $data);
    }

    public function create()
    {
        return view('bins.addrecord');
    }

    public function store(Request $request)
    {
        $record = new Record;

        $record->firstname = $request->firstname;
        $record->middlename = $request->middlename;
        $record->lastname = $request->lastname;
        $record->position = $request->position;
        $record->birthdate = $request->birthdate;
        $record->civilstatus = $request->civilstatus;
        $record->occupation = $request->occupation;
        $record->sitio = $request->sitio;

        $record->save();
        return redirect("/");
    }

    public function show($id)
    {
        $record = Record::find($id);
        return view("bins.viewrecord", compact('record'));
    }

    public function edit($id)
    {
        $records = Record::find($id);

        return view('bins.editrecord', compact('records'));
    }

    public function update(Request $request, $id)
    {
        $record = Record::find($id);

        $record->firstname = $request->firstname;
        $record->middlename = $request->middlename;
        $record->lastname = $request->lastname;
        $record->position = $request->position;
        $record->birthdate = $request->birthdate;
        $record->civilstatus = $request->civilstatus;
        $record->occupation = $request->occupation;
        $record->sitio = $request->sitio;

        $record->update();

        return redirect("/");
    }

    public function destroy($id)
    {
        $record = Record::find($id);
        $record->delete();

        return redirect("/");
    }
}
