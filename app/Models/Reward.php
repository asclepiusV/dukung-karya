<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reward extends Model
{
    use HasFactory;
    protected $guarded = [
        'reward_id',
    ];
    
    protected $casts = [
        'reward_amount' => 'integer'
    ];

    public function project() : BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }
}
