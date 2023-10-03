<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisators extends Model
{
    use HasFactory;

    protected $fillable = [
        'org_id',
        'name',
        'description',
    ];
}
