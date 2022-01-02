<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ad()
    {
       return $this->belongsTo('App\Models\Ad');
    }

    public function user()
    {
        return $this->belongsTo('\App\Models\User');
    }

    public function sender()
    {
        return $this->belongsTo('\App\Models\User','sender_id');
    }

     public function receiver()
    {
        return $this->belongsTo('\App\Models\User','receiver_id');
    }


}
