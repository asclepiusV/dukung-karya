<?php

namespace App\Models;

use App\Models\Backer;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function backers() : HasMany
    {
        return $this->hasMany(Backer::class, 'reward_id', 'reward_id');
    }
}