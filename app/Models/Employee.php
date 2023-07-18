<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['nama','jeniskelamin','notelepon','created_at','update_at'];
    protected $dates = ['created_at'];
}
