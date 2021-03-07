<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeBuilds extends Model
{
    protected $fillable = ['name','options','email'];
    use HasFactory;
}
