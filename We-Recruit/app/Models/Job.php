<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function jobtype(){
        return $this->belongsTo(JobType::class);
    }
}
