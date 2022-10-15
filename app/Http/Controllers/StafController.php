<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staf;
use Yajra\DataTables\Facades\DataTables;

class StafController extends Controller
{
    public function data()
    {
        return DataTables::of(Staf::query())->toJson();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(Staf::query())->toJson();
        }

        return view('staf');
    }
}
