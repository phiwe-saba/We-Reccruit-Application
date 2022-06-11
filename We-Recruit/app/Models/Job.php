<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        '$title',
        '$dep_name',
        '$job_type',
        '$location'
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
}
