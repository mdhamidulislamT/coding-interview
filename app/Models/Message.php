<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'message',
        'employee_id',
        'status',
    ];


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
    public function message_category()
    {
        return $this->belongsTo(MessageCategory::class);
    }
    

}
