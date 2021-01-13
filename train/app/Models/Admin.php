<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id','password','u_name','u_age','u_email','u_phone','u_address'];

    public function tickets (){
        return $this->hasMany('App\Ticket');
    }
}
