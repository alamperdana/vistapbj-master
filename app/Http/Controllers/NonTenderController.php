<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NonTender;
use Yajra\DataTables\Facades\DataTables;

class NonTenderController extends Controller
{
    public function data()
    {
        return DataTables::of(NonTender::query())->toJson();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            return DataTables::of(NonTender::query())->toJson();
        }

        return view('nontender');
    }
}
