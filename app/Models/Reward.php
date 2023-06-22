<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reward extends Model
{
    use HasFactory;
    protected $guarded = [
        'reward_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
