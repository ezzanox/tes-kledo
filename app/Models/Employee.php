<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    // fillable 
    protected $fillable = [
        'name',
        'status_id',
        'salary'
    ];

    // disable timestamps
    public $timestamps = false;

    public function reference()
    {
        return $this->belongsTo(Reference::class, 'status_id');
    }

    // get employees 
    public function getEmployees()
    {
        return 123;
    }

    public function overtimes()
    {
        return $this->hasMany(Overtime::class);
    }
}
