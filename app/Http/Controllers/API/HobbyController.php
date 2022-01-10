<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hobby;
use App\Helpers\ResponseFormatter;

class HobbyController extends Controller
{
    public function index()
    {
    	$hobbies = Hobby::all();
    	return ResponseFormatter::success([
			'Hobby' => $hobbies,
		], 'Get Data Hobbys Success');
    }

    public function store(Request $request)
    {
    	$hobby = Hobby::create($request->all());
    	return ResponseFormatter::success([
			'Hobby' => $hobby,
		], 'Add Data Hobby Success');
    }

    public function update(Request $request, $id)
    {
    	$hobby = Hobby::find($id);
    	$hobby->update($request->all());
    	return ResponseFormatter::success([
			'Hobby' => $hobby,
		], 'Edit Data Hobby Success');
    }

    public function destroy($id)
    {
    	$hobby = Hobby::find($id);
    	$hobby->delete();
    	return ResponseFormatter::success([
			'Hobby' => null,
		], 'Delete Data Hobby Success');
    }
}
