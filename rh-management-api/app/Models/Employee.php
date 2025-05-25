<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'SSN', 'department_id'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public static $rules = [
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:employees',
    'SSN' => 'required|string|unique:employees',
    'department_id' => 'required|exists:departments,id'
    ];
}