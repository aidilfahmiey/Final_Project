<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'ticket_id';
    protected $fillable = ['ticket_id', 'train_id', 'user_id', 'origin', 'destination', 'price', 'seat_no'];
    

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function trains(){
        return $this->belongsTo('App\Models\Train');
    }
}
