<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $primaryKey = 'ticket_id';
    protected $fillable = ['ticket_id', 'train_id', 'origin', 'destination', 'price', 'seat_no', 'shift_no'];

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function trains(){
        return $this->belongsTo('App\Train');
    }
}
