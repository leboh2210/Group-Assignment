<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'institution_id'];

    // Relationship with Institution
    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }

    // Relationship with Course
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}