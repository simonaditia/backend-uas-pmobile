<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use App\Helpers\ResponseFormatter;

class EducationController extends Controller
{
    public function index()
    {
    	$educations = Education::all();
    	return ResponseFormatter::success([
			'Education' => $educations,
		], 'Get Data Educations Success');
    }

    public function store(Request $request)
    {
    	$education = Education::create($request->all());
    	return ResponseFormatter::success([
			'Education' => $education,
		], 'Add Data Education Success');
    }

    public function update(Request $request, $id)
    {
    	$education = Education::find($id);
    	$education->update($request->all());
    	return ResponseFormatter::success([
			'Education' => $education,
		], 'Edit Data Education Success');
    }

    public function destroy($id)
    {
    	$education = Education::find($id);
    	$education->delete();
    	return ResponseFormatter::success([
			'Education' => null,
		], 'Delete Data Education Success');
    }
}
