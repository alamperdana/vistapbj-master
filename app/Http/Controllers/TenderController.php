<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tender;
use Yajra\DataTables\Facades\DataTables;

class TenderController extends Controller
{
    public function data()
    {
        return DataTables::of(Tender::query())->toJson();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Tender::query())->toJson();
        }

        return view('tender');
    }
}
