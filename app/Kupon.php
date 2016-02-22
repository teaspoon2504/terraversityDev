<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kupon extends Model
{
    public function user()
    {
        return $this->hasOne('\App\Models\User', 'id', 'user_id');
    }

    public function approve()
    {
        $this->approved = true;
        $this->save();
    }

    public function activate()
    {
        if ($this->approved) {
            $this->activated = true;
            $this->activated_at = \Carbon\Carbon::now();
            $this->save();
        }
    }
}
