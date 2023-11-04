<?php

namespace App\Http\Controllers;

use App\Models\ApplicationStatus;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    public function index()
    {
        $infos = Information::latest()->get();
        return view('admin.info.index', compact('infos'));
    }

    public function create()
    {
        return view('admin.info.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'passport' => 'required|string',
            'pass_exp_date' => 'nullable|date', // Assuming pass_exp_date is a date field
            'lmia' => 'nullable|string',
            'lmia_active' => 'nullable|date',
            'document_id' => 'nullable|string',
            'document_valid' => 'nullable|date', // Assuming document_valid is a date field
        ]);

        Information::create($request->all());

        return redirect()->route('information.index')->with('success', 'Examination created successfully.');
    }

    public function edit($id)
    {
        $info = Information::find($id);
        return view('admin.info.edit', compact('info'));
    }

    public function editStatus($id)
    {
        $info = Information::find($id);
        return view('admin.info.status', compact('info'));
    }

    public function show($id)
    {
        $info = Information::find($id);
        $status = ApplicationStatus::latest()->first();
        
        return view('admin.info.show', compact('info', 'status'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'passport' => 'required|string',
            'pass_exp_date' => 'nullable|date', 
            'lmia' => 'nullable|string',
            'lmia_active' => 'nullable|date',
            'document_id' => 'nullable|string',
            'document_valid' => 'nullable|date',
        ]);

        $info = Information::find($id);
        $info->update($request->all());

        return redirect()->route('information.index')->with('success', 'Information updated successfully.');
    }

    public function updateStatus(Request $request, $id)
    {
        $info = Information::find($id);
        $info->update($request->all());

        return redirect()->route('information.show', $id)->with('success', 'Status updated successfully.');
    }

    public function destroy($id)
    {
        $info = Information::find($id);
        $info->delete();
        return redirect()->route('information.index')->with('success', 'Information deleted successfully.');
    }
}
