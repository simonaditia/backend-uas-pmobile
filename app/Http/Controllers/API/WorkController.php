<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Work;
use App\Helpers\ResponseFormatter;

class WorkController extends Controller
{
    public function index()
    {
    	$works = Work::all();
    	return ResponseFormatter::success([
			'work' => $work,
		], 'Get Works Success');
    }

    public function store(Request $request)
    {
    	$work = Work::create($request->all());
    	return ResponseFormatter::success([
			'work' => $work,
		], 'Add Work Success');
    }
}
