<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Booking;

class Service extends Model
{
    use HasFactory;
    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
