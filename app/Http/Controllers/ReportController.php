<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::all();
        return response()->json($reports);
    }

    public function show($id)
    {
        $report = Report::find($id);
        return response()->json($report);
    }

    public function store(Request $request)
    {
        $report = Report::create($request->all());
        return response()->json($report, 201);
    }

    public function update(Request $request, $id)
    {
        $report = Report::find($id);
        $report->update($request->all());
        return response()->json($report);
    }

    public function destroy($id)
    {
        Report::destroy($id);
        return response()->json(null, 204);
    }
}
