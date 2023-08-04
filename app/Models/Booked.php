<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    protected $fillable = ['user_id','firstname','lastname','middlename','contact','email','destination','pickup','landmark','dateoftrip','pax','daysandhours','pickuptime','status'];
    use HasFactory;
    
}
