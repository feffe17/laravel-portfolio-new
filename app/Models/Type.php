<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = ['name']; // Assicurati che il campo "name" sia riempiibile

    // Relazione one-to-many con il modello Project
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
