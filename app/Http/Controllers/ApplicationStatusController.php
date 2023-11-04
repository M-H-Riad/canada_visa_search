<?php

namespace App\Http\Controllers;

use App\Models\ApplicationStatus;
use Illuminate\Http\Request;

class ApplicationStatusController extends Controller
{
    public function index()
    {
        $status = ApplicationStatus::latest()->first();
        return view('admin.status.show', compact('status'));
    }

    public function edit($id)
    {
        $status = ApplicationStatus::find($id);
        return view('admin.status.edit', compact('status'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status_1' => 'required|string',
        ]);

        $info = ApplicationStatus::find($id);
        $info->update($request->all());

        return redirect()->route('status.index')->with('success', 'Information updated successfully.');
    }
}
