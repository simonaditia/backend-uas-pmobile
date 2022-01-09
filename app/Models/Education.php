<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
    	'level',
    	'school_name',
    	'start_year',
    	'end_year',
    	'user_id',
    ];

    public function user()
    {
    	$this->belongsTo(User::class, 'user_id', 'id');
    }
}
