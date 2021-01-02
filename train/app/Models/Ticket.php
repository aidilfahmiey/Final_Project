<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = ['ticket_no', 'booking_no', 'train_id', 'origin', 'destintion', 'price', 'seat_no'];
}
