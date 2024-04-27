<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Service;

class Payment extends Model
{
    use HasFactory;
    public function booking(){
        return $this->belongsTo(Booking::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
