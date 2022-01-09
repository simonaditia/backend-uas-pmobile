<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use App\Helpers\ResponseFormatter;

class SkillController extends Controller
{
    public function index()
    {
    	$skills = Skill::all();
    	return ResponseFormatter::success([
			'Skill' => $skills,
		], 'Get skills Success');
    }

    public function store(Request $request)
    {
    	$skill = Skill::create($request->all());
    	return ResponseFormatter::success([
			'Skill' => $skill,
		], 'Add Skill Success');
    }

    public function update(Request $request, $id)
    {
    	$skill = Skill::find($id);
    	$skill->update($request->all());
    	return ResponseFormatter::success([
			'Skill' => $skill,
		], 'Edit Skill Success');
    }

    public function destroy($id)
    {
    	$skill = Skill::find($id);
    	$skill->delete();
    	return ResponseFormatter::success([
			'Skill' => null,
		], 'Delete Skill Success');
    }
}
