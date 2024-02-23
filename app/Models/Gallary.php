<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallary extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'department_id',
    ];

    public function depart()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }
}
