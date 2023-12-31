<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillCategory extends Model
{
    use HasFactory;
    public function skillInfo()
    {
        return $this->hasMany(Skill::class, 'category_id', 'id');
    }
}
