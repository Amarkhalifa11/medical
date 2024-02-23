<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'icon',
        'desc',
        'user_id',
    ];

    public function admin()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
