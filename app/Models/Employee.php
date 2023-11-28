<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    protected $hidden = [
        'password',
    ];

    public function assigned_message(): HasMany
    {
        return $this->hasMany(Message::class)->where('status', 'assigned');
    }
    public function solved_message(): HasMany
    {
        return $this->hasMany(Message::class)->where('status', 'solved');
    }

}
