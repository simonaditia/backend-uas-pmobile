<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FavoriteFood extends Model
{
    use HasFactory;

    public $table = "educations";

    protected $fillable = [
    	'name',
    	'picture',
    	'user_id',
    ];

    public function user()
    {
    	$this->belongsTo(User::class, 'user_id', 'id');
    }
}
