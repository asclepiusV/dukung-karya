<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [
        'category_id',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
