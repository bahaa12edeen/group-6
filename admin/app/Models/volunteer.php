<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    use HasFactory;
    protected $table = 'volunteers';
    protected $primaryKey =  'volunteer_id';
    protected $fillable = [
        'volunteer_name',
        'volunteer_email',
        'volunteer_password',
        'volunteer_img',
        
    ];
}
