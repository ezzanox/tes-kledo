<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
    use HasFactory;

    // fillable
    protected $guard = [];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
