<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [
        'category_id',
    ];

    public function project() : HasMany
    {
        return $this->hasMany(Project::class, 'category_id', 'category_id');
    }
}
