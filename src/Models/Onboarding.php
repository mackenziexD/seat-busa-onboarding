<?php

namespace Helious\SeatBusaOnboarding\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\CentralConnection;
use Seat\Web\Models\User;

class Onboarding extends Model
{

    protected $table = 'seat_busa_onboarding'; 
    
    protected $fillable = ['last_update_by', 'content']; 
    
    public $timestamps = true;

    public function updated_by()
    {
        return $this->belongsTo(User::class, 'last_update_by', 'id');
    }
}
