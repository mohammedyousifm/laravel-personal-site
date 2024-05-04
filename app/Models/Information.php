<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;
    protected $table = 'information';

    protected $fillable = [
        'name',
        'profile',
        'project_complete',
        'hosting_date',
        'total_clients',
        'count_companies'
    ];
}
