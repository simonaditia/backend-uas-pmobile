<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FavoriteFood;
use App\Helpers\ResponseFormatter;

class FavoriteFoodController extends Controller
{
    public function index()
    {
    	$favoriteFoods = FavoriteFood::all();
    	return ResponseFormatter::success([
			'FavoriteFood' => $favoriteFoods,
		], 'Get Data FavoriteFoods Success');
    }

    public function store(Request $request)
    {
    	$favoriteFood = FavoriteFood::create($request->all());
    	return ResponseFormatter::success([
			'FavoriteFood' => $favoriteFood,
		], 'Add Data FavoriteFood Success');
    }

    public function update(Request $request, $id)
    {
    	$favoriteFood = FavoriteFood::find($id);
    	$favoriteFood->update($request->all());
    	return ResponseFormatter::success([
			'FavoriteFood' => $favoriteFood,
		], 'Edit Data FavoriteFood Success');
    }

    public function destroy($id)
    {
    	$favoriteFood = FavoriteFood::find($id);
    	$favoriteFood->delete();
    	return ResponseFormatter::success([
			'FavoriteFood' => null,
		], 'Delete Data FavoriteFood Success');
    }
}
