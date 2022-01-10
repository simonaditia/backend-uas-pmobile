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
			'work' => $works,
		], 'Get Data Works Success');
    }

    public function store(Request $request)
    {
    	$work = Work::create($request->all());
    	return ResponseFormatter::success([
			'work' => $work,
		], 'Add Data Work Success');
    }

    public function update(Request $request, $id)
    {
    	$work = Work::find($id);
    	$work->update($request->all());
    	return ResponseFormatter::success([
			'work' => $work,
		], 'Edit Data Work Success');
    }

    public function destroy($id)
    {
    	$work = Work::find($id);
    	$work->delete();
    	return ResponseFormatter::success([
			'work' => null,
		], 'Delete Data Work Success');
    }
}
