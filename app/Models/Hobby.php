<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hobby extends Model
{
    use HasFactory;

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
