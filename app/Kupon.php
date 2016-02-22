<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    public function user()
    {
        return $this->hasOne('\App\Models\User', 'id', 'user_id');
    }

}
