<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'cell_number'
    ];

    public $timestamps = false;
    //protected $hidden = [
       // 'date_applied',
       // 'status'
    //]
}
