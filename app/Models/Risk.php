<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $table = 'risks';

    protected $fillable = [
        'name_project',
        'risk_type',
        'risk_owner',
        'description_ofrisk',
        'risk_rating',
        'risk_treatment',
        'describe_action',
        'probability',
        'impact',
        'impact_description',
        'action_toreduce',
    ];
}

