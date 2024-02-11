<?php

namespace App\Models;
use App\Models\Department;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'desc',
        'twitter',
        'instagram',
        'linkiden',
        'facebook',
        'department_id',
    ];


    public function depart()
    {
        return $this->hasOne(Department::class, 'id', 'department_id');
    }

}
