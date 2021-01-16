<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;
    protected $primaryKey = 'train_id';
    public $incrementing = false;
    protected $fillable = ['train_id','total_seat','origin','destination','arrival_time','departure_time'];

    public function tickets(){
        return $this->hasMany('App\Models\Ticket');
    }
     
}
