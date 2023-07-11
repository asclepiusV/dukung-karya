<?php

namespace App\Models;

use App\Models\User;
use App\Models\Reward;
use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Backer extends Model
{
    use HasFactory;

    protected $guarded = [
        'backer_id',
    ];

    public function project() : BelongsTo
    {
        return $this->belongsTo(Project::class, 'project_id', 'project_id');
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
    
    public function reward() : BelongsTo
    {
        return $this->belongsTo(Reward::class, 'reward_id', 'reward_id');
    }
}